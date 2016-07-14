<?php
namespace frontend\models;


use common\models\CommonContestItem;
use yii\base\Model;
use yii;
use himiklab\yii2\recaptcha\ReCaptchaValidator;
use yii\web\UploadedFile;

/**
 * Signup form
 * @property $email;
 * @property $password;
 * @property $firstName;
 * @property $lastName;
 * @property $address;
 * @property $postCode;
 * @property $nricNumber;
 * @property $phoneNumber;
 * @property $bankID;
 * @property $uploadFile;
 * @property $bankAccountNumber;
 * @property $collectionDaysID;
 * @property $collectionStartAt;
 * @property $collectionEndAt;
 * @property $enquiryID;
 */
class ParkerRegisterForm extends Model
{
    public $email;
    public $password;
    public $firstName;
    public $lastName;
    public $address;
    public $postCode;
    public $nricNumber;
    public $phoneNumber;
    public $bankID;
    public $uploadFile;
    public $bankAccountNumber;
    public $collectionDaysID;
    public $collectionStartAt;
    public $collectionEndAt;
    public $enquiryID;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            [['password', 'firstName', 'lastName', 'address', 'postCode', 'phoneNumber', 'nricNumber', 'bankID', 'bankAccountNumber', 'collectionDaysID', 'collectionStartAt', 'collectionEndAt'], 'required'],
            [['email'], 'validateUsername'],
            [['uploadFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxSize' => 5242880, 'tooBig' => 'Limit is 5MB'],
            [['email'], 'required'],
            [['email'], 'email'],
            [['enquiryID'], 'safe'],

        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function register()
    {
        $this->uploadFile = UploadedFile::getInstance($this, 'uploadFile');
        var_dump($this->validate());
        var_dump($this->getErrors());
        if ($this->validate()) {

            $user = new User();
            $profile = new UserProfile();
            $parker = new ParkerItem();
            $user->username = $this->email;
            $user->email = $this->email;
            $user->first_name = $this->firstName;
            $user->last_name = $this->lastName;
            $user->setPassword($this->password);
            $user->setCreatedDate();
            $user->setUpdatedDate();
            $user->setPublishedDate();
            $user->creator_id = 1;

            $user->generateAuthKey();

            $flag = $user->save();

            if ($flag) {
                $auth = Yii::$app->authManager;
                $standard = $auth->getRole('parker');
                $auth->assign($standard, $user->id);
            }

            if ($flag) {
                $profile->phone_number = $this->phoneNumber;
                $profile->post_code = $this->postCode;
                $profile->address = $this->address;
                $profile->enquiry_id = $this->enquiryID;
                $profile->id = $user->id;
                $profile->save();
            }

            if($flag) {
                $parker->user_id = $user->id;
                $parker->nric_number = $this->nricNumber;
                $parker->bank_id = $this->bankID;
                $parker->bank_account_number = $this->bankAccountNumber;
                $parker->collection_days_id = $this->collectionDaysID;
                $parker->collection_start_at = $this->collectionStartAt;
                $parker->collection_end_at = $this->collectionEndAt;
                if ($this->uploadFile) {
                    $attachment = Attachment::uploadFile($this->uploadFile, 'image');
                    $parker->attachment_id = $attachment->id;
                }
                $flag = $parker->save();
            }

            if ($flag) {
                return $user;
            }

        }
        return null;
    }

    public function validateUsername()
    {
        $user = User::findByUsername($this->email);
        if ($user && $user->is_deleted == 0) {
            $this->addError('email', 'Email already registered.');
        }
    }
}
