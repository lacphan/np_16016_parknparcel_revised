<?php
/**
 * Created by PhpStorm.
 * User: lacphan
 * Date: 7/14/16
 * Time: 11:39 AM
 */
$this->title = 'FAQ| Park and Parcel';
?>
<div class="tmp-faq">
    <div class="container">
        <div class="my-breadcrumb">
            <a href="<?= Yii::$app->urlManager->baseUrl ?>">Home</a> /
            <span>Parker</span>
        </div>
        <div class="main-title">Frequently Asked Questions</div>
        <div class="faq-content">
            <div class="tab-control">
                <a href="<?= Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'faq-user']) ?>" class="bnt-user">User</a>
                <a href="<?= Yii::$app->urlManager->createUrl(['page/show-single','slug' => 'faq-parker']) ?>" class="btn-parker active">Parker</a>
            </div>
            <div class="tab-content">
                <div class="tab-item active" id="tab-parker">
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#parker-item-0" aria-expanded="false"
                               aria-controls="collapseExample">
                                How do I set the collection timing with the customers? </a>
                        </div>
                        <div class="collapse" id="parker-item-0">
                            <div class="answer">
                                <p>Parkers are required to state the day and time users can collect their parcels upon
                                    registering, please do stay at home and wait for users’ collection. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#parker-item-1" aria-expanded="false"
                               aria-controls="collapseExample">
                                How am I be paid by PNP? </a>
                        </div>
                        <div class="collapse" id="parker-item-1">
                            <div class="answer">
                                <p>We will pay parkers based on the deliveries made for the month ($1 per delivery).
                                    Payment will be made on 1st and 15th of every month through bank transfer. Do
                                    provide us with the correct bank account number for smooth transactions. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#parker-item-2" aria-expanded="false"
                               aria-controls="collapseExample">
                                Will be personal particulars be viewed by others? </a>
                        </div>
                        <div class="collapse" id="parker-item-2">
                            <div class="answer">
                                <p>No. Only the authorized staff of PNP will have access to your information. The sender
                                    of the parcels only has your contact number and address.</p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#parker-item-3" aria-expanded="false"
                               aria-controls="collapseExample">
                                Can I cancel the delivery after accepting? </a>
                        </div>
                        <div class="collapse" id="parker-item-3">
                            <div class="answer">
                                <p>No. Once a delivery is assigned to you, you cannot cancel the job. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#parker-item-4" aria-expanded="false"
                               aria-controls="collapseExample">
                                Why do parkers need to be verified? </a>
                        </div>
                        <div class="collapse" id="parker-item-4">
                            <div class="answer">
                                <p>PNP is built on a trusted community of parkers. There are no strangers among us. We
                                    need to verify parkers to prove their identities and protect our users.</p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#parker-item-5" aria-expanded="false"
                               aria-controls="collapseExample">
                                What if I missed the delivery by the postman? </a>
                        </div>
                        <div class="collapse" id="parker-item-5">
                            <div class="answer">
                                <p>You have the responsibility to wait for re-delivery or collect at the post office
                                    with the non-deliver slip.</p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#parker-item-6" aria-expanded="false"
                               aria-controls="collapseExample">
                                No one came to collect the parcel, what should I do? </a>
                        </div>
                        <div class="collapse" id="parker-item-6">
                            <div class="answer">
                                <p>Users have up to 5 days to collect their parcel from you, after which a late payment
                                    of $0.50/day will be charged to them for the next 14 days. The late charges will
                                    only be paid to the affected parker upon payment by users to PNP. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#parker-item-7" aria-expanded="false"
                               aria-controls="collapseExample">
                                My question isn’t listed here. Where can I get more information? </a>
                        </div>
                        <div class="collapse" id="parker-item-7">
                            <div class="answer">
                                <p>The PNP customer care team will be happy to help you. You can also call our hotline
                                    which you will find on the PNP website. Or submit your question in writing using the
                                    contact form.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-item " id="tab-user">
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-0" aria-expanded="false"
                               aria-controls="collapseExample">
                                What if the parker is not at home to receive my parcel? </a>
                        </div>
                        <div class="collapse" id="user-item-0">
                            <div class="answer">
                                <p>Parkers have the responsibility to stay at home to collect the parcel from the
                                    delivery man. In the event of missed delivery, parkers would have to wait for
                                    re-delivery or collect the undelivered parcel at the nearest Singpost. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-1" aria-expanded="false"
                               aria-controls="collapseExample">
                                Is my parcel safe? </a>
                        </div>
                        <div class="collapse" id="user-item-1">
                            <div class="answer">
                                <p>PNP is built on a trusted community of parkers. All the parkers will undergo identity
                                    verification before they can be listed for parker service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-2" aria-expanded="false"
                               aria-controls="collapseExample">
                                Can someone else collect my parcel for me? </a>
                        </div>
                        <div class="collapse" id="user-item-2">
                            <div class="answer">
                                <p>Yes, as long as that person who is collecting on your behalf has your PNP unique
                                    code. Make sure the person has your login details to acknowledge collection on your
                                    behalf. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-3" aria-expanded="false"
                               aria-controls="collapseExample">
                                What if my parcel is lost? </a>
                        </div>
                        <div class="collapse" id="user-item-3">
                            <div class="answer">
                                <p>In the unfortunate event that your parcel cannot be retrieved, PNP will compensate
                                    you the value of your parcel or S$30 per parcel, whichever lower. Please contact our
                                    Customer Support team at support@parknparcel.com.sg</p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-4" aria-expanded="false"
                               aria-controls="collapseExample">
                                How long does it take for Park N Parcel to process my refund for lost parcels? </a>
                        </div>
                        <div class="collapse" id="user-item-4">
                            <div class="answer">
                                <p>Please give us one week from reporting to investigation and attempt to recover your
                                    parcel. We will process the refund after the investigation. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-5" aria-expanded="false"
                               aria-controls="collapseExample">
                                What is the maximum weight/dimensions allowed for my parcel? </a>
                        </div>
                        <div class="collapse" id="user-item-5">
                            <div class="answer">
                                <p>Parcels can be up to 5kg and cumulative cubic dimensions of 80cm. You can check the
                                    size by adding together the length, width and height of your parcel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-6" aria-expanded="false"
                               aria-controls="collapseExample">
                                How do you calculate the sum of dimensions? </a>
                        </div>
                        <div class="collapse" id="user-item-6">
                            <div class="answer">
                                <p>Sum of dimensions = (L+W+H) cm. For example, if a parcel is 5x10x5cm in dimensions,
                                    the sum of dimensions is 5+10+5=20cm.</p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-7" aria-expanded="false"
                               aria-controls="collapseExample">
                                How much does PNP charge for the parker service? </a>
                        </div>
                        <div class="collapse" id="user-item-7">
                            <div class="answer">
                                <p>PNP only charges $1.95 for the service. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-8" aria-expanded="false"
                               aria-controls="collapseExample">
                                Do charges include GST? </a>
                        </div>
                        <div class="collapse" id="user-item-8">
                            <div class="answer">
                                <p>Yes, the $1.95 service fees are inclusive of GST. GST charges will be borne by
                                    PNP.</p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-9" aria-expanded="false"
                               aria-controls="collapseExample">
                                How do I know if my parcel has been delivered? </a>
                        </div>
                        <div class="collapse" id="user-item-9">
                            <div class="answer">
                                <p>The status of the delivery will be updated on the website. Once it has been
                                    delivered, you will receive in-app/email notification. Please proceed to the
                                    parker’s address to collect the parcel based on their specified day/timing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-10" aria-expanded="false"
                               aria-controls="collapseExample">
                                Should I call/text my parker before heading down? </a>
                        </div>
                        <div class="collapse" id="user-item-10">
                            <div class="answer">
                                <p>Yes, it would be advisable to give a text/call to the parker to inform them your PNP
                                    code and your arrival, so parker can prepare in advance and you would be make a
                                    wasted trip. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-11" aria-expanded="false"
                               aria-controls="collapseExample">
                                What modes of payments can I use for the service? </a>
                        </div>
                        <div class="collapse" id="user-item-11">
                            <div class="answer">
                                <p>Currently, our only mode of payment is by credit card. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-12" aria-expanded="false"
                               aria-controls="collapseExample">
                                How long can I take to collect the parcel? </a>
                        </div>
                        <div class="collapse" id="user-item-12">
                            <div class="answer">
                                <p>Upon collection by our parkers, you have up to 5 days to collect the parcel. An
                                    additional $0.50/day will be charged for late collection up to the next 14 days,
                                    after which it will be considered “abandoned”.</p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-13" aria-expanded="false"
                               aria-controls="collapseExample">
                                How do I get a confirmation on the acceptance of the service? </a>
                        </div>
                        <div class="collapse" id="user-item-13">
                            <div class="answer">
                                <p>Upon payment for the service on our website, you will be issued a PNP unique code to
                                    write beside your online shipping details and for easy collection at your parker’s
                                    place. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-14" aria-expanded="false"
                               aria-controls="collapseExample">
                                Do I have to sign a contract? </a>
                        </div>
                        <div class="collapse" id="user-item-14">
                            <div class="answer">
                                <p>No, we generally do not require our customers to sign any agreement when signing
                                    up. </p>
                            </div>
                        </div>
                    </div>
                    <div class="question-item">
                        <div class="question">
                            <a data-toggle="collapse" href="#user-item-15" aria-expanded="false"
                               aria-controls="collapseExample">
                                My question isn’t listed here. Where can I get more information? </a>
                        </div>
                        <div class="collapse" id="user-item-15">
                            <div class="answer">
                                <p>The PNP customer care team will be happy to help you. You can also call our hotline
                                    which you will find on the PNP website. Or submit your question in writing using the
                                    contact form.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
