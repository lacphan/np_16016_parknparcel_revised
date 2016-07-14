<?php

/* @var $this yii\web\View */
/* @var $emailSubmission  frontend\models\EmailSubmission */
/* @var $form yii\widgets\ActiveForm */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Park and Parcel';
?>
<div class="tmp-home">
    <div class="home-slider">
        <div class="carousel" data-hidden="2">
            <div class="slider-item">
                <img width="1920" height="650" src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/home-slider.jpg'?>" class="attachment-full size-full" alt="home-slider" srcset="http://localhost/php/enpii/16/np_16016_parknparcel_wp/wp-content/uploads/2016/05/home-slider-300x102.jpg 300w, http://localhost/php/enpii/16/np_16016_parknparcel_wp/wp-content/uploads/2016/05/home-slider-768x260.jpg 768w, http://localhost/php/enpii/16/np_16016_parknparcel_wp/wp-content/uploads/2016/05/home-slider-1024x347.jpg 1024w, http://localhost/php/enpii/16/np_16016_parknparcel_wp/wp-content/uploads/2016/05/home-slider-1200x406.jpg 1200w, http://localhost/php/enpii/16/np_16016_parknparcel_wp/wp-content/uploads/2016/05/home-slider.jpg 1920w" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px">                    </div>
            <div class="slider-item">
                <img width="1920" height="650" src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/home-slider.jpg'?>" class="attachment-full size-full" alt="home-slider" srcset="http://localhost/php/enpii/16/np_16016_parknparcel_wp/wp-content/uploads/2016/05/home-slider-300x102.jpg 300w, http://localhost/php/enpii/16/np_16016_parknparcel_wp/wp-content/uploads/2016/05/home-slider-768x260.jpg 768w, http://localhost/php/enpii/16/np_16016_parknparcel_wp/wp-content/uploads/2016/05/home-slider-1024x347.jpg 1024w, http://localhost/php/enpii/16/np_16016_parknparcel_wp/wp-content/uploads/2016/05/home-slider-1200x406.jpg 1200w, http://localhost/php/enpii/16/np_16016_parknparcel_wp/wp-content/uploads/2016/05/home-slider.jpg 1920w" sizes="(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px">                    </div>
        </div>
        <div class="slider-content">
            <div class="banner-title">
                park &amp; Collect your parcel            </div>
            <div class="search-form">
                <form action="">
                    <input type="text" placeholder="Enter your postcode" name="postcode">
                    <input type="submit" value="SHOW NEARBY PARKERS">
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="button-popup">
                <a data-toggle="modal" data-target="#myModal">How It Works</a>
            </div>
        </div>
    </div>
    <div class="home-content">
        <div class="home-section1">
            <div class="container">
                <div class="section-title">parkers in our neighborhood</div>
                <div class="section-intro"><p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio.</p>
                </div>
                <div class="section1-map"><img src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/map.jpg'?>" alt=""></div>
            </div>
        </div>
        <div class="container">
            <div class="home-section2">
                <div class="section-title">WHY CHOOSE park n parcel</div>
                <div class="section-intro"><p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio.</p>
                </div>
                <div class="section2-list-item row">
                    <div class="col-md-3 col-sm-6 item">
                        <div class="section-item">
                            <div class="image"><img width="71" height="109" src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/item1.png'?>" class="attachment-thumbnail size-thumbnail" alt="item1"></div>
                            <div class="title">Convenience</div>
                            <div class="note">(Flexible &amp;a Hassle‐free)</div>
                            <div class="intro"><p> Collect your parcel from your neighbor’s house within 5 days. Flexible hours and hassle free. We aim for the nearest. Parker's location of less than 1km for your collection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="section-item">
                            <div class="image"><img width="126" height="98" src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/item2.png'?>" class="attachment-thumbnail size-thumbnail" alt="item2"></div>
                            <div class="title">Affordability</div>
                            <div class="note">(Pay aa small fee)</div>
                            <div class="intro"><p> Enjoy a peace of mind at a no-frills price of $1.95 only.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="section-item">
                            <div class="image"><img width="97" height="97" src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/item3.png'?>" class="attachment-thumbnail size-thumbnail" alt="item3"></div>
                            <div class="title">Fast and Easy</div>
                            <div class="note">(Cut the queue &amp; no more waiting)</div>
                            <div class="intro"><p> No more queuing at the post office and wasting precious weekend time. Flash your unique PNP code for effortless collection at your neighbor’s premise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <div class="section-item">
                            <div class="image"><img width="117" height="105" src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/item4.png'?>" class="attachment-thumbnail size-thumbnail" alt="item4"></div>
                            <div class="title">Social Benefits</div>
                            <div class="note">(Get to know your neighbors)</div>
                            <div class="intro"><p> Get to know your friendly neighborhood Parkers. No more missed parcel for you and at the same time your neighbors could enjoy a little economic welfare.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <div class="modal-body">
                    <div class="hiw-title">HOW IT WORKS</div>
                    <div class="list-hiw">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="image"><img width="83" height="98" src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/work-icon1.jpg'?>" class="attachment-full size-full" alt="work-icon1"></div>
                                    <div class="name">Locate Parker</div>
                                    <div class="intro"><p> Search and locate nearby Parkers' address while you are shopping online.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="image"><img width="78" height="109" src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/work-icon2.jpg'?>" class="attachment-full size-full" alt="work-icon2"></div>
                                    <div class="name">Select Parker</div>
                                    <div class="intro"><p> After selecting Parker, Enter details of your parcel and make payment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="image"><img width="87" height="111" src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/work-icon3.jpg'?>" class="attachment-full size-full" alt="work-icon3"></div>
                                    <div class="name">Generate Park N Parcel ID</div>
                                    <div class="intro"><p> Add the given PNP ID next to your Name at the Shipping Address column during checkout at your online retail store.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item">
                                    <div class="image"><img width="117" height="117" src="<?= Yii::$app->urlManager->baseUrl . 'themes/default/images' . '/work-icon4.jpg'?>" class="attachment-full size-full" alt="work-icon4"></div>
                                    <div class="name">Collect</div>
                                    <div class="intro"><p> Once parker received your parcel, you will receive a notification (email and in-app) and proceed to<br>
                                            collect from your friendly Parker at your convenience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/signup'])?>">Sign Up Now</a>
                        <a href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>