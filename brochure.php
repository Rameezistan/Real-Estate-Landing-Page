<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/Projcss.css" rel="stylesheet">
</head>
<body>
    <div class="projects brochure">
        <section class="pro_overview">
            <section class="container">
                <div class="row">
                    <div class="" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                        <div class="row no-gutters proj-bro">
                            <div class="col-lg-6 myprojdetail">
                                <div class="card location rounded-0 pro_head">
                                    <div class="card-body sumry">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h2 class="titles"><span itemprop="name"><a href="/Projects/Verona-at-Damac-Hills-2">Verona at Damac Hills 2</a> </span></h2>
                                                <h6><span>Project Status:</span> New Launch</h6>
    
                                            </div>
                                           
                                            <div class="col-6 col-lg-5">
                                                <div class="price-head">
                                                    <label for="lblStartingPrice">Starting From</label>
                                                    <h2 id="lblStartingPrice" itemprop="price"><span id="lblPriceId">AED 1,829,000</span>&nbsp;<i id="QuickBrochure_pricehsid" class="fa fa-info-circle" aria-hidden="true" data-toggle="modal" data-target="#Priceinfo"></i></h2>
                                                </div>
                                            </div>
                                             
                                        </div>
    
                                        <div class="clearfix"></div>
                                        <div id="QuickBrochure_brochureTableId" class="row">
                                            <div class="col-md-12 brochure-table">
                                                <table>
                                                    <tbody>
                                                        
    
                                                        <tr>
                                                            <th><i class="fa fa-building"></i>Developer: </th>
                                                            <td><a href="/Developer/Damac-Properties">Damac Properties</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th><i class="fa fa-map-marker"></i>Community: </th>
                                                            <td>Damac Hills 2</td>
                                                        </tr>
                                                        <tr>
                                                            <th><i class="fa fa-building-o"></i>Property Type: </th>
                                                            <td>Townhouse</td>
                                                        </tr>
                                                        <tr>
                                                            <th><i class="fa fa-bed"></i>Accomodation: </th>
                                                            <td><a href="/Projects/Verona-at-Damac-Hills-2-FloorPlans">4 Bedroom Townhouse</a></td>
                                                            </tr><tr>
                                                                <th><i class="fa fa-area-chart"></i>Size: </th>
                                                                <td>2,352 to 2,415 Sq Ft.</td>
                                                            </tr>
    
                                                        <tr>
                                                            <th><i class="fa fa-money"></i>Down Payment:</th>
                                                            <td>
                                                                20%</td>
                                                        </tr>
                                                        <tr>
                                                            <th><i class="fa fa-percent"></i>Payment Plan: </th>
                                                            <td>
                                                                <a href="/Projects/Verona-at-Damac-Hills-2-PaymentPlan">70/30, (1% monthly)</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th><i class="fa fa-calendar-check-o"></i>Handover: </th>
                                                            <td>
                                                                Jun - 2026 </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mycontact">
                                <div class="card location rounded-0">
                                    <div class="card-body">
                                        <h3><span><i class="fa fa-download mr-1" aria-hidden="true"></i>Download Brochure</span></h3>
                                        <div class="form-group mybrochure">
                                            <a href="/brochure.php" id="QuickBrochure_MainBrochureId" data-key="brochure" onclick="SetBrochureName(this);" class="brochbtn active"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Project Brochure</a>
                                            <a href="/floorplan.php" id="QuickBrochure_fpBrochureId" onclick="SetBrochureName(this);" data-key="fpbrochure" class="brochbtn"><i class="fa fa-object-group" aria-hidden="true"></i>Floor Plan </a>
                                            <a href="/paymentplan.php" id="QuickBrochure_ppBrochureId" data-key="ppbrochure" onclick="SetBrochureName(this);" class="brochbtn"><i class="fa fa-money" aria-hidden="true"></i>Payment Plan </a>
                                        </div>
                                        <div id="QuickBrochure_fpfilterId" class="form-group d-none">
                                            <div class="row broc-floor-filter">
                                                <div class="input-warp25">
                                                    <div class="filter-label">
                                                        <label>Property Type</label>
                                                    </div>
                                                    <select name="QuickBrochure$PropertyTypedlId" id="PropertyTypedlId">
                                                        <option value="All">All</option>
                                                        <option value="Townhouse">Townhouse</option>
                                                    </select>
                                                </div>
                                                <div class="input-warp25">
                                                    <div class="filter-label">
                                                        <label>Category</label>
                                                    </div>
                                                    <select name="QuickBrochure$fpcategorydlId" id="fpcategorydlId">
                                                        <option value="All">All</option>
                                                        <option value="Floor Plan">Floor Plan</option>
                                                    </select>
                                                </div>
                                                <div class="input-warp25">
                                                    <div class="filter-label">
                                                        <label>Unit Type</label>
                                                    </div>
                                                    <select name="QuickBrochure$fpsubcategorydlId" id="fpsubcategorydlId">
                                                        <option value="All">All</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php
                                            if(!empty($_POST["send"])) {
                                                $userName = $_POST["userName"];
                                                $userEmail = $_POST["userEmail"];
                                                $userPhone = $_POST["userPhone"];
                                                $userCode = $_POST["userCode"];
                                                $userIam = $_POST["userIam"];
                                                $toEmail = "esensibles@gmail.com";
                                            
                                                $mailHeaders = "Name: " . $userName .
                                                "\r\n Email: ". $userEmail  . 
                                                "\r\n Code: ". $userCode  .
                                                "\r\n Phone: ". $userPhone  .
                                                "\r\n I am: ". $userIam  . "\r\n";
                                
                                                if(mail($toEmail, $userName, $mailHeaders)) {
                                                    $message = "Your Form is Submitted! Click Here.";
                                                }
                                            }
                                        ?>
                                        
                                        <form name="contactFormEmail" method="post">
                                        <div class="form-group">
                                            <label for="txtnamepbr">Name</label>
                                            <input name="userName" type="text" id="userName" class="form-control" placeholder="Name *">
                                        </div>
    
                                        <div class="form-group">
                                            <label for="txtemailpbr">Email ID</label>
                                            <input name="userEmail" type="text" name="userEmail" class="form-control" placeholder="Email Id *">
                                        </div>
                                         
                                        <div class="row no-gutters m-0">
                                            <div class="col-5 col-lg-4">
                                                <div class="form-group">
                                                    <label for="ddlCountryCodepbr">Contact No</label>
                                                    <select name="userCode" id="userCode" class="form-control">
                                                        <option selected="selected" value="Code">Code</option>
                                                        <option <?php echo "selected"?>>ARE +971</option>
                                                        <option <?php echo "selected"?>>BHR +973</option>
                                                        <option <?php echo "selected"?>>KWT +965</option>
                                                        <option <?php echo "selected"?>>OMN +968</option>
                                                        <option <?php echo "selected"?>>QAT +974</option>
                                                        <option <?php echo "selected"?>>SAU +966</option>
                                                        <option <?php echo "selected"?>>ABW +297</option>
                                                        <option <?php echo "selected"?>>FG +93</option>
                                                        <option <?php echo "selected"?>>GO +244</option>
                                                        <option <?php echo "selected"?>>AIA +1-264</option>
                                                        <option <?php echo "selected"?>>LB +355</option>
                                                        <option <?php echo "selected"?>>ND +376</option>
                                                        <option <?php echo "selected"?>>RG +54</option>
                                                        <option <?php echo "selected"?>>RM +374</option>
                                                        <option <?php echo "selected"?>>SM +1-684</option>
                                                        <option <?php echo "selected"?>>TA +672</option>
                                                        <option <?php echo "selected"?>>AUS +61</option>
                                                        <option <?php echo "selected"?>>AUT +43</option>
                                                        <option <?php echo "selected"?>>AZE +994</option>
                                                        <option <?php echo "selected"?>>BDI +257</option>
                                                        <option <?php echo "selected"?>>BEL +32</option>
                                                        <option <?php echo "selected"?>>BEN +229</option>
                                                        <option <?php echo "selected"?>>BFA +226</option>
                                                        <option <?php echo "selected"?>>BGD +880</option>
                                                        <option <?php echo "selected"?>>BGR +359</option>
                                                        <option <?php echo "selected"?>>BHS +1-242</option>
                                                        <option <?php echo "selected"?>>BIH +387</option>
                                                        <option <?php echo "selected"?>>BLM +590</option>
                                                        <option <?php echo "selected"?>>BLR +375</option>
                                                        <option <?php echo "selected"?>>BLZ +501</option>
                                                        <option <?php echo "selected"?>>BMU +1-441</option>
                                                        <option <?php echo "selected"?>>BOL +591</option>
                                                        <option <?php echo "selected"?>>BRA +55</option>
                                                        <option <?php echo "selected"?>>BRB +1-246</option>
                                                        <option <?php echo "selected"?>>BRN +673</option>
                                                        <option <?php echo "selected"?>>BTN +975</option>
                                                        <option <?php echo "selected"?>>BWA +267</option>
                                                        <option <?php echo "selected"?>>CAF +236</option>
                                                        <option <?php echo "selected"?>>CAN +1</option>
                                                        <option <?php echo "selected"?>>CCK +61</option>
                                                        <option <?php echo "selected"?>>CHE +41</option>
                                                        <option <?php echo "selected"?>>CHL +56</option>
                                                        <option <?php echo "selected"?>>CHN +86</option>
                                                        <option <?php echo "selected"?>>CIV +225</option>
                                                        <option <?php echo "selected"?>>CMR +237</option>
                                                        <option <?php echo "selected"?>>COD +243</option>
                                                        <option <?php echo "selected"?>>COG +242</option>
                                                        <option <?php echo "selected"?>>COK +682</option>
                                                        <option <?php echo "selected"?>>COL +57</option>
                                                        <option <?php echo "selected"?>>COM +269</option>
                                                        <option <?php echo "selected"?>>CRI +506</option>
                                                        <option <?php echo "selected"?>>CUB +53</option>
                                                        <option <?php echo "selected"?>>CUW +599</option>
                                                        <option <?php echo "selected"?>>CXR +61</option>
                                                        <option <?php echo "selected"?>>CYM +1-345</option>
                                                        <option <?php echo "selected"?>>CYP +357</option>
                                                        <option <?php echo "selected"?>>CZE +420</option>
                                                        <option <?php echo "selected"?>>DEU +49</option>
                                                        <option <?php echo "selected"?>>DJI +253</option>
                                                        <option <?php echo "selected"?>>DMA +1-767</option>
                                                        <option <?php echo "selected"?>>DNK +45</option>
                                                        <option <?php echo "selected"?>>ZA +213</option>
                                                        <option <?php echo "selected"?>>ECU +593</option>
                                                        <option <?php echo "selected"?>>EGY +20</option>
                                                        <option <?php echo "selected"?>>ERI +291</option>
                                                        <option <?php echo "selected"?>>EST +372</option>
                                                        <option <?php echo "selected"?>>ETH +251</option>
                                                        <option <?php echo "selected"?>>FIN +358</option>
                                                        <option <?php echo "selected"?>>FJI +679</option>
                                                        <option <?php echo "selected"?>>FLK +500</option>
                                                        <option <?php echo "selected"?>>FRA +33</option>
                                                        <option <?php echo "selected"?>>FRO +298</option>
                                                        <option <?php echo "selected"?>>FSM +691</option>
                                                        <option <?php echo "selected"?>>GAB +241</option>
                                                        <option <?php echo "selected"?>>GEO +955</option>
                                                        <option <?php echo "selected"?>>GEO +995</option>
                                                        <option <?php echo "selected"?>>GGY +44-1481</option>
                                                        <option <?php echo "selected"?>>GHA +233</option>
                                                        <option <?php echo "selected"?>>GIB +350</option>
                                                        <option <?php echo "selected"?>>GIN +224</option>
                                                        <option <?php echo "selected"?>>GMB +220</option>
                                                        <option <?php echo "selected"?>>GNB +245</option>
                                                        <option <?php echo "selected"?>>GNQ +240</option>
                                                        <option <?php echo "selected"?>>GRC +30</option>
                                                        <option <?php echo "selected"?>>GRD +1-473</option>
                                                        <option <?php echo "selected"?>>GRL +299</option>
                                                        <option <?php echo "selected"?>>GTM +502</option>
                                                        <option <?php echo "selected"?>>GUM +1-671</option>
                                                        <option <?php echo "selected"?>>GUY +592</option>
                                                        <option <?php echo "selected"?>>HKG +852</option>
                                                        <option <?php echo "selected"?>>HND +504</option>
                                                        <option <?php echo "selected"?>>HRV +385</option>
                                                        <option <?php echo "selected"?>>HTI +509</option>
                                                        <option <?php echo "selected"?>>HUN +36</option>
                                                        <option <?php echo "selected"?>>IDN +62</option>
                                                        <option <?php echo "selected"?>>IMN +44-1624</option>
                                                        <option <?php echo "selected"?>>IND +91</option>
                                                        <option <?php echo "selected"?>>IOT +246</option>
                                                        <option <?php echo "selected"?>>IRL +353</option>
                                                        <option <?php echo "selected"?>>IRN +98</option>
                                                        <option <?php echo "selected"?>>IRQ +964</option>
                                                        <option <?php echo "selected"?>>ISL +354</option>
                                                        <option <?php echo "selected"?>>ISR +972</option>
                                                        <option <?php echo "selected"?>>ITA +39</option>
                                                        <option <?php echo "selected"?>>JAM +1-876</option>
                                                        <option <?php echo "selected"?>>JEY +44</option>
                                                        <option <?php echo "selected"?>>JEY +44-1534</option>
                                                        <option <?php echo "selected"?>>JOR +962</option>
                                                        <option <?php echo "selected"?>>JPN +81</option>
                                                        <option <?php echo "selected"?>>KAZ +7</option>
                                                        <option <?php echo "selected"?>>KEN +254</option>
                                                        <option <?php echo "selected"?>>KGZ +996</option>
                                                        <option <?php echo "selected"?>>KHM +855</option>
                                                        <option <?php echo "selected"?>>KIR +686</option>
                                                        <option <?php echo "selected"?>>KNA +1-869</option>
                                                        <option <?php echo "selected"?>>KOR +82</option>
                                                        <option <?php echo "selected"?>>LAO +856</option>
                                                        <option <?php echo "selected"?>>LBN +961</option>
                                                        <option <?php echo "selected"?>>LBR +231</option>
                                                        <option <?php echo "selected"?>>LBY +218</option>
                                                        <option <?php echo "selected"?>>LCA +1-758</option>
                                                        <option <?php echo "selected"?>>LIE +423</option>
                                                        <option <?php echo "selected"?>>LKA +94</option>
                                                        <option <?php echo "selected"?>>LSO +266</option>
                                                        <option <?php echo "selected"?>>LTU +370</option>
                                                        <option <?php echo "selected"?>>LUX +352</option>
                                                        <option <?php echo "selected"?>>LVA +371</option>
                                                        <option <?php echo "selected"?>>MAC +853</option>
                                                        <option <?php echo "selected"?>>MAR +212</option>
                                                        <option <?php echo "selected"?>>MCO +377</option>
                                                        <option <?php echo "selected"?>>MDA +373</option>
                                                        <option <?php echo "selected"?>>MDG +261</option>
                                                        <option <?php echo "selected"?>>MDV +960</option>
                                                        <option <?php echo "selected"?>>MEX +52</option>
                                                        <option <?php echo "selected"?>>MHL +692</option>
                                                        <option <?php echo "selected"?>>MKD +389</option>
                                                        <option <?php echo "selected"?>>MLI +223</option>
                                                        <option <?php echo "selected"?>>MLT +356</option>
                                                        <option <?php echo "selected"?>>MMR +95</option>
                                                        <option <?php echo "selected"?>>MNE +382</option>
                                                        <option <?php echo "selected"?>>MNG +976</option>
                                                        <option <?php echo "selected"?>>MNP +1-670</option>
                                                        <option <?php echo "selected"?>>MOZ +258</option>
                                                        <option <?php echo "selected"?>>MRT +222</option>
                                                        <option <?php echo "selected"?>>MSR +1-664</option>
                                                        <option <?php echo "selected"?>>MUS +230</option>
                                                        <option <?php echo "selected"?>>MWI +265</option>
                                                        <option <?php echo "selected"?>>MYS +60</option>
                                                        <option <?php echo "selected"?>>MYT +262</option>
                                                        <option <?php echo "selected"?>>NAM +264</option>
                                                        <option <?php echo "selected"?>>NCL +687</option>
                                                        <option <?php echo "selected"?>>NER +227</option>
                                                        <option <?php echo "selected"?>>NGA +234</option>
                                                        <option <?php echo "selected"?>>NIC +505</option>
                                                        <option <?php echo "selected"?>>NIU +683</option>
                                                        <option <?php echo "selected"?>>NLD +31</option>
                                                        <option <?php echo "selected"?>>Norway +47</option>
                                                        <option <?php echo "selected"?>>NPL +977</option>
                                                        <option <?php echo "selected"?>>NRU +674</option>
                                                        <option <?php echo "selected"?>>NZL +64</option>
                                                        <option <?php echo "selected"?>>PAK +92</option>
                                                        <option <?php echo "selected"?>>PAN +507</option>
                                                        <option <?php echo "selected"?>>PER +51</option>
                                                        <option <?php echo "selected"?>>PHL +63</option>
                                                        <option <?php echo "selected"?>>PLW +680</option>
                                                        <option <?php echo "selected"?>>PNG +675</option>
                                                        <option <?php echo "selected"?>>POL +48</option>
                                                        <option <?php echo "selected"?>>PRK +850</option>
                                                        <option <?php echo "selected"?>>PRT +351</option>
                                                        <option <?php echo "selected"?>>PRY +595</option>
                                                        <option <?php echo "selected"?>>PSE +970</option>
                                                        <option <?php echo "selected"?>>PYF +689</option>
                                                        <option <?php echo "selected"?>>ROU +40</option>
                                                        <option <?php echo "selected"?>>RUS +7</option>
                                                        <option <?php echo "selected"?>>RWA +250</option>
                                                        <option <?php echo "selected"?>>SDN +249</option>
                                                        <option <?php echo "selected"?>>SEN +221</option>
                                                        <option <?php echo "selected"?>>SGP +65</option>
                                                        <option <?php echo "selected"?>>SHN +290</option>
                                                        <option <?php echo "selected"?>>SLB +677</option>
                                                        <option <?php echo "selected"?>>SLE +232</option>
                                                        <option <?php echo "selected"?>>SLV +503</option>
                                                        <option <?php echo "selected"?>>SMR +378</option>
                                                        <option <?php echo "selected"?>>SOM +252</option>
                                                        <option <?php echo "selected"?>>SPM +508</option>
                                                        <option <?php echo "selected"?>>SPN +34</option>
                                                        <option <?php echo "selected"?>>SRB +381</option>
                                                        <option <?php echo "selected"?>>SSD +211</option>
                                                        <option <?php echo "selected"?>>STP +239</option>
                                                        <option <?php echo "selected"?>>SUR +597</option>
                                                        <option <?php echo "selected"?>>SVK +421</option>
                                                        <option <?php echo "selected"?>>SVN +386</option>
                                                        <option <?php echo "selected"?>>SWE +46</option>
                                                        <option <?php echo "selected"?>>SWZ +268</option>
                                                        <option <?php echo "selected"?>>SXM +1-721</option>
                                                        <option <?php echo "selected"?>>SYC +248</option>
                                                        <option <?php echo "selected"?>>SYR +963</option>
                                                        <option <?php echo "selected"?>>TCA +1-649</option>
                                                        <option <?php echo "selected"?>>TCD +235</option>
                                                        <option <?php echo "selected"?>>TGO +228</option>
                                                        <option <?php echo "selected"?>>TKM +993</option>
                                                        <option <?php echo "selected"?>>THA +66</option>
                                                        <option <?php echo "selected"?>>TJK +992</option>
                                                        <option <?php echo "selected"?>>TKL +690</option>
                                                        <option <?php echo "selected"?>>TLS +670</option>
                                                        <option <?php echo "selected"?>>TON +676</option>
                                                        <option <?php echo "selected"?>>TTO +1-868</option>
                                                        <option <?php echo "selected"?>>TUR +216</option>
                                                        <option <?php echo "selected"?>>TUR +90</option>
                                                        <option <?php echo "selected"?>>TUV +688</option>
                                                        <option <?php echo "selected"?>>TWN +886</option>
                                                        <option <?php echo "selected"?>>TZA +255</option>
                                                        <option <?php echo "selected"?>>UGA +256</option>
                                                        <option <?php echo "selected"?>>UK +44</option>
                                                        <option <?php echo "selected"?>>UKR +380</option>
                                                        <option <?php echo "selected"?>>URY +598</option>
                                                        <option <?php echo "selected"?>>USA +1</option>
                                                        <option <?php echo "selected"?>>UZB +998</option>
                                                        <option <?php echo "selected"?>>VAT +379</option>
                                                        <option <?php echo "selected"?>>VCT +1-784</option>
                                                        <option <?php echo "selected"?>>VEN +58</option>
                                                        <option <?php echo "selected"?>>VGB +1-284</option>
                                                        <option <?php echo "selected"?>>VIR +1-340</option>
                                                        <option <?php echo "selected"?>>VNM +84</option>
                                                        <option <?php echo "selected"?>>VUT +678</option>
                                                        <option <?php echo "selected"?>>WLF +681</option>
                                                        <option <?php echo "selected"?>>WSM +685</option>
                                                        <option <?php echo "selected"?>>XKX +383</option>
                                                        <option <?php echo "selected"?>>YEM +967</option>
                                                        <option <?php echo "selected"?>>ZAF +27</option>
                                                        <option <?php echo "selected"?>>ZMB +260</option>
                                                        <option <?php echo "selected"?>>ZWE +263</option>
                                                        <option <?php echo "selected"?>>Other</option>
                                                    </select>
    
                                                </div>
                                            </div>
                                            <div class="col-7 col-lg-8">
                                                <div class="form-group">
                                                    <label for="txtphonepbr">�&nbsp;</label>
                                                    <input name="userPhone" type="text" maxlength="13" id="userPhone" class="form-control" placeholder="Contact No *" onkeypress="if((event.keyCode < 48 || event.keyCode > 57) &amp;&amp; (event.keyCode < 43 || event.keyCode > 45)) event.returnValue=false;" onkeydown="fnchkbtnbroch();" onblur="fnchkbtnbroch();" onkeyup="fnchkbtnbroch();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                             <label for="ddlQueryType"></label>
                                             <select id="userIam" class="form-control" aria-label="Query Type" name="userIam">
                                                <option value="I am"<?php if(isset($_POST['userIam']) && $_POST['userIam'] == "I am") echo " selected"; ?>>I am</option>
                                                <option <?php echo " selected"; ?>>Individual</option>
                                                <option <?php echo " selected"; ?>>Agent</option>
                                                <option <?php echo " selected"; ?>>Investor</option>
                                                <option <?php echo " selected"; ?>>Do not want to disclose</option>
                                                <option <?php echo " selected"; ?>>Others</option>
                                            </select>
                                        </div>
                                               
                                                <input type="submit" name="send" value="DOWNLOAD NOW" class="btn btn-dark d-block">
                                                 <?php if (! empty($message)) {?>
                                                    <div class='success'>
                                                        <strong><?php echo $message; ?>	</strong>
                                                        <a href="/images/BROCHURE.pdf">Download PDF</a>
                                                    </div>
                                                <?php } ?>
                                                <input type="submit" name="QuickBrochure$btnsubmitfp" value="Download Now" onclick="return ValModelControl2();" id="btnsubmitfp" class="btn btn-dark d-none">
                                                <input type="hidden" id="BrochureName" value="brochure">
                                                <input type="hidden" id="ProjId" value="1368">
            
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
         <input type="hidden" name="QuickBrochure$hClientUserId" id="hClientUserId" value="0">
        <input type="hidden" name="QuickBrochure$hdncookies" id="hdncookies">
        <input type="hidden" name="QuickBrochure$hdncookies2" id="hdncookies2">
        <div class="modal fade" id="Priceinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <table id="tblAppointment" class="table table-striped table-bordered" style="width: 100%">
                            <tbody id="QuickBrochure_priceId"><tr><td><img src="images/USD.webp" alt="Currency Icon">USD<span>493,830</span></td></tr><tr><td><img src="images/EUR.webp" alt="Currency Icon">EUR<span>420,670</span></td></tr><tr><td><img src="images/AUD.webp" alt="Currency Icon">AUD<span>676,730</span></td></tr><tr><td><img src="images/INR.webp" alt="Currency Icon">INR<span>36,927,510</span></td></tr><tr><td><img src="images/GBP.webp" alt="Currency Icon">GBP<span>365,800</span></td></tr><tr><td><img src="images/PKR.webp" alt="Currency Icon">PKR<span>80,055,330</span></td></tr><tr><td><img src="images/RUB.webp" alt="Currency Icon">RUB<span>37,823,720</span></td></tr><tr><td><img src="images/SAR.webp" alt="Currency Icon">SAR<span>1,865,580</span></td></tr><tr><td><img src="images/RSD.webp" alt="Currency Icon">RSD<span>49,254,970</span></td></tr><tr><td><img src="images/SGD.webp" alt="Currency Icon">SGD<span>676,730</span></td></tr><tr><td><img src="images/CNY.webp" alt="Currency Icon">CNY<span>3,273,910</span></td></tr><tr><td><img src="images/HKD.webp" alt="Currency Icon">HKD<span>3,859,190</span></td></tr><tr><td><img src="images/XPF.webp" alt="Currency Icon">XPF<span>50,388,950</span></td></tr><tr><td><img src="images/OMR.webp" alt="Currency Icon">OMR<span>182,900</span></td></tr></tbody>
                        </table>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>