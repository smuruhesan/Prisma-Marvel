<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("head.php"); ?>
</head>

<body class="index-page">
<?php include("nav.php"); ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" style="min-height:20vh;">

      <div class="container">
        <div class="row gy-4" style="justify-content:center; align-items:center;">
          <div class="col-lg-8 order-2 order-lg-1 d-flex flex-column justify-content-center text-center" data-aos="zoom-out">
            <h1>References</h1>
            <!-- <p>Your one-stop resource for Prisma Cloud tools and information.</p> -->
            
          </div>
        </div>
      </div>

    </section>

    <section id="faq-2" class="faq-2 section light-background">

      
            <style>
            body{
                background:#f5f6f8;
            }
                .faq-2{
                    transition:1s;
                    width:100%;
                }
                .faq-2.active{
                    width:40%;
                    transition:1s;
                }
                .accordion-item{
                    border:none;
                    padding:20px;
                    margin:20px 0;
                    background:#fff;
                }
                .hero{
                    padding:60px 0 30px 0;
                }
                .accordion-button{
                    gap:10px;
                }
                .accordion-button:focus, .accordion-button:active{
                    border:none !important;
                    background:transparent !important;
                    /* padding:0; */
                    box-shadow:none !important;
                }
                .accordion-button h3{
                    font-weight: 600;
                    font-size: 20px;
                    line-height: 24px;
                    /* margin: 0 30px 0 32px; */
                    transition: 0.3s;
                    cursor: pointer;
                }
                .accordion-button:not(.collapsed){
                    background:transparent;
                    border:none;
                    box-shadow:none;
                }
                .accordion-button{
                    transition:.7s;
                }
                .accordion-button:hover h3{
                    color:#47b2e4;
                }
                .tab_cont .nav{
                    justify-content:center;
                    border:none;
                    border-bottom:1px solid #00667D;
                    padding-bottom:10px;
                }
                .tab_cont .nav-link{
                    background:transparent;
                    border:none;
                    color:#00667e;
                }
                .tab_cont .nav-link.active{
                    color:#fff;
                    background:#00667e;
                    border-radius:4px;
                }
                .tab_inner{
                    padding:40px 0;
                    color:#00667D;
                }
                .tab_inner a{
                    color:#00667D;
                    transition:.7s;

                }
                .tab_inner a:hover{
                    color:#02212f;
                }
            </style>
        <!-- Sub Menus-->
        <div class="container tab_cont" id="srink_list" >
            <nav>
                <!-- Sub Menus list-->
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-quickref-tab" data-bs-toggle="tab" data-bs-target="#nav-quickref" type="button" role="tab" aria-controls="nav-quickref" aria-selected="true">Quick References</button>
                    <button class="nav-link" id="nav-slack-tab" data-bs-toggle="tab" data-bs-target="#nav-slack" type="button" role="tab" aria-controls="nav-slack" aria-selected="true">Slack Channels</button>
                    <button class="nav-link" id="nav-trainings-tab" data-bs-toggle="tab" data-bs-target="#nav-trainings" type="button" role="tab" aria-controls="nav-trainings" aria-selected="false">Trainings</button>
                </div>
            </nav>


            <!-- Sub Menu - Quick References-->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-quickref" role="tabpanel" aria-labelledby="nav-quickref-tab">

                    <div class="tab_inner">


                        <!-- Quick Reference lists-->
                        <h4 style="margin-top:15px">Release Trackers</h4>
                        <ul>     
                            <li><a href="https://status.paloaltonetworks.com/" target="_blank">Prisma Cloud Status page</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/RED/pages/738590738/Release+Trackers" target="_blank">Prisma Cloud - Release Tracker</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCC/pages/3915874385/CWP+Sprints+and+Release+Calendar" target="_blank">Prisma Cloud Compute - Release Tracker</a></li>
                        </ul>

                        <h4 style="margin-top:15px">Release Notes/ Known issues / Look Ahead</h4>
                        <ul>     
                            <li><a href="https://docs.prismacloud.io/en/compute-edition/32/rn/release-information/release-information" target="_blank">Prisma Cloud Compute - Release Notes</a></li>
                            <li><a href="https://docs.prismacloud.io/en/enterprise-edition/rn/prisma-cloud-release-info/prisma-cloud-release-info" target="_blank">Prisma Cloud - Release Notes</a></li>
                            <li><a href="https://docs.prismacloud.io/en/enterprise-edition/rn/known-issues/known-fixed-issues" target="_blank">Prisma Cloud Known Issues</a></li>
                            <li><a href="https://docs.prismacloud.io/en/enterprise-edition/rn/look-ahead-planned-updates-prisma-cloud/look-ahead-planned-updates-prisma-cloud" target="_blank">Prisma Cloud - Look Ahead</a></li>                            
                            <li><a href="https://docs.prismacloud.io/en/enterprise-edition/rn/limited-ga-features-prisma-cloud/limited-ga-features-prisma-cloud" target="_blank">Limited GA Features on Prisma Cloud</a></li>

                        </ul>
                        <h4 style="margin-top:15px">PCSUP's related</h4>
                        <ul>     
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/Playbooks/Prisma+Cloud+Playbooks" target="_blank">Playbook Hub</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCC/pages/4026826830/Vulnerability+Feeds" target="_blank">Vulnerability Feeds</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCSCRE/pages/3849650179/Jira+RCA+Categories+and+Definition" target="_blank">Jira RCA Categories and Definition</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/CASCS/CAS+teams+domains+and+responsibilities" target="_blank">CAS teams domains and responsibilities</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/pcspm/pages/1192886689/Prisma+Cloud+PM+Team" target="_blank">Prisma Cloud PM Team</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCC/pages/3956965439/CWP+Scrum+Teams" target="_blank">CWP Scrum Teams</a></li>
                        </ul>

                        <h4 style="margin-top:15px">Confluences Spaces</h4>
                        <ul>
                            
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/RED/overview" target="_blank">Redlock</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCC/overview" target="_blank">Prisma Cloud Compute</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCSCRE/overview" target="_blank">PCS-CE</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/BRIDGECREW/overview" target="_blank">CAS</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/CASCS/CAS+Support" target="_blank">CAS Support</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/Playbooks/Prisma+Cloud+Playbooks" target="_blank">Playbook Hub</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/pages/viewpage.action?pageId=7012890" target="_blank">APAC TAC Prisma Cloud & Compute</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/pages/viewpage.action?pageId=8211717" target="_blank">Prisma Cloud Compute - TAC (NAM)</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/PCST/Prisma+Cloud+EMEA+Support" target="_blank">Prisma Cloud EMEA Support</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/PCCS/Cider+Security+Platform+-+SA" target="_blank">Cider Security Platform - SA</a></li>
                        </ul>


                        <h4 style="margin-top:15px">Lab</h4>
                        <ul>
                            <li><a href="https://theloop.paloaltonetworks.com/loop/prisma-cloud-compute-90-day-eval-license-internal" target="_blank">Prisma Cloud Compute Edition 90 Day Eval License - INTERNAL</a></li>
                            <li><a href="https://theloop.paloaltonetworks.com/loop/tac-ps-cloud-labs-access-and-policies" target="_blank">TAC/PS Cloud Labs Access and Policies</a></li>
                            <li><a href="https://theloop.paloaltonetworks.com/loop/default-credentials-for-gcs-lab-devices" target="_blank">Default credentials for GCS lab devices</a></li>
                        </ul>


                        <h4 style="margin-top:15px">Loop</h4>
                        <ul>
                            <li><a href="https://theloop.paloaltonetworks.com/loop/ls/content/5238107346173952/product-intel/prisma-cloud" target="_blank">Prisma Cloud Sales Resources</a></li>
                            <li><a href="https://theloop.paloaltonetworks.com/loop/prisma-cloud-training" target="_blank">Prisma Cloud Solutions Architect (SA) Training</a></li>
                            <li><a href="https://theloop.paloaltonetworks.com/loop/prisma-cloud-competitors" target="_blank">Prisma Cloud Competitive Intelligence</a></li>
                        </ul>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-cwp" role="tabpanel" aria-labelledby="nav-cwp-tab">
                    <div class="tab_inner">
                        
                        <ul>
                            <li><a href="" target="_blank">lApplication Container Security Guideink</a></li>
                            <li><a href="" target="_blank">Playbooks</a></li>
                            <li><a href="" target="_blank">linCookbook (Need Github Access)k</a></li>
                            <li><a href="" target="_blank">Sprint and Release Tracker</a></li>
                            <li><a href="" target="_blank">Bugs & Sprints (ETA for Fix)</a></li>
                            <li><a href="" target="_blank">CWP Specific Escalation process (PCSUP)</a></li>
                            <li><a href="" target="_blank">Lab Inventory</a></li>
                            

                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-cs" role="tabpanel" aria-labelledby="nav-cs-tab">
                
                    <div class="tab_inner">
                        <ul>
                            <li><a href="" target="_blank">Bridecrew Workflow</a></li>
                            <li><a href="" target="_blank">Code Security Troubleshooting</a></li>
                            <li><a href="" target="_blank">TAC Run-book</a></li>
                            <li><a href="" target="_blank">Lab Inventory</a></li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-dig" role="tabpanel" aria-labelledby="nav-dig-tab">
                    <div class="tab_inner">
                    
                        <ul>
                            <li><a href="" target="_blank">Cider Beta (Early Access ) - Playbook</a></li>
                            <li><a href="" target="_blank">linCAS Team  (Engineering Team)k</a></li>
                            <li><a href="" target="_blank">CI/CD security module - Beta training recording (Passcode: h*!Tk8fpjw)</a></li>
                            <li><a href="" target="_blank">link</a></li>
                            <li><a href="" target="_blank">link</a></li>
                        </ul>
                        <h4 style="margin-top:15px">Google Docs</h4>
                        <ul>
                            <li><a href="" target="_blank">Cider Google Drive </a></li>
                            <li><a href="" target="_blank">CAS Escalation Process</a></li>
                            <li><a href="" target="_blank">Prisma Cloud CAS Escalation Template  - to be used as guidance to engage CAS development team which is developed in collaboration with the Cider and Code Security (Bridgecrew) team.</a></li>
                            <li><a href="" target="_blank">CAS team domains and responsibilities </a></li>
                            <li><a href="" target="_blank">CAS Support Troubleshooting</a></li>
                            <li><a href="" target="_blank">CAS How to Articles</a></li>
                            <li><a href="" target="_blank">Application Security Beta User Guide</a></li>

                        </ul>
                        <h4 style="margin-top:15px">NPI Trainings</h4>
                        <ul>
                            <li><a href="" target="_blank">NPI Slides / Presentation</a></li>
                            <li><a href="" target="_blank">NPI Recording (Passcode :psHticN^2y)</a></li>
                            <li><a href="" target="_blank">Prisma Cloud: CI/CD security [Cider] (Darwin GTM)</a></li>

                        </ul>
                    </div>
                </div>
            </div>


            <!-- Sub Menu - Slack Contents-->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-slack" role="tabpanel" aria-labelledby="nav-slack-tab">

                    <div class="tab_inner">


                        <!-- CSPM - Slack Contents-->
                        <h4 style="margin-top:15px">Cloud Security</h4>
                        
                        <table style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <th style="border: 1px solid currentColor; padding: 8px;">Slack Channel</th>
                                <th style="border: 1px solid currentColor; padding: 8px;">Purpose</th>
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CDMBLGFPB" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-policy</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">All things related to RQL and policies</td>
                            </tr>

                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CDN10Q0NT" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-product</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">All product related questions for public cloud</td>																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CDQR9P2HY" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-support-ask</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Ask questions of Public Cloud Support</td>																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C05T6V8CLDB" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-appdna-field</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">AppDNA related queries</td>																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C01K7LY5WDN" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-iam-module-help</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Ask related to IAM module</td>																					 																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C02CMH4LS1G" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-supportapp-okta-issues</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Provides access to Support Tenant and Support Tab on Prod Stacks.</td>																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CDLUV7NF4" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-docs</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">All things technical docs, FQS, whitepapers for public cloud</td>																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CEGRH3W6S" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-deploy</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">For DevOps to communicate with Dev and QA regarding regular production deployment</td>																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C011YUKFEKY" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-devops</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">general devops discussions. the #devops-monitoring channel is reserved for receiving notifications from third party monitoring services</td>																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CE7T58Z96" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-oncall</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">To notify, communicate, and track production emergencies. Threats to production ONLY. All other non-emergency but urgent requests should go into pcs-engineering.</td>																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CELR456G5" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-support-alerts</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Alerts from the PCS Redlock PCSUP project</td>																					
                                																					
                            </tr>
                        </table>

                        

                        <!-- Runtime Sec - Slack Contents-->


                        <h4 style="margin-top:15px">Runtime Security</h4>
                        
                        <table style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <th style="border: 1px solid currentColor; padding: 8px;">Slack Channel</th>
                                <th style="border: 1px solid currentColor; padding: 8px;">Purpose</th>
                            </tr>
                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CL11MD99Q" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-se-twistlock</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">For Twistlock technical questions.</td>																					
                                																					
                            </tr>
                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C01PS0ZHHV0" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-waas-module-help</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Channel for all kind of questions or information around our Prisma Cloud WAAS module</td>																					
                            </tr>

                            <tr>
                                 <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C02TJ4L9X5F" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-agentless</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">For all things related to agentless workload scanning in Prisma Cloud Compute.</td>																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CK3EG9CRH" target="_blank" style="color: blue; text-decoration: underline;"><strong>#help-wildfire</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Ask help with WildFire platform usage, functionality, understanding it</td>																					
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CD53SFBFA" target="_blank" style="color: blue; text-decoration: underline;"><strong>#wildfire-issues</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">This slack channel is to provide a way for our support engineer to report customer issues for WF</td>																					
                                																					
                            </tr>
                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C02J53E7ML6" target="_blank" style="color: blue; text-decoration: underline;"><strong>#people-who-have-tanzu-customers</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">A place to share and search for  information regarding VMWare Tanzu in order to better support our Tanzu customers.</td>																					
                            </tr>
                        </table>


                        <!-- App Sec - Slack Contents-->
                        
                        <h4 style="margin-top:15px">Application Security</h4>
                        
                        <table style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <th style="border: 1px solid currentColor; padding: 8px;">Slack Channel</th>
                                <th style="border: 1px solid currentColor; padding: 8px;">Purpose</th>
                            </tr>

                            <tr>
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C01SSDU83NH" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-bridgecrew-integration</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Channel to discuss all questions/comments related to PC and BC Integration. Please use the threads in the pinned-posts to ask questions related to a specific topic.</td>
                            </tr>
                            
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C01304W22NB" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-cas-launches</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">CAS Product launch updates</td>																					
                            </tr>
                            
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C06NSMRK02W" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-cas-product-questions</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">You can ask any questions regarding the product roadmap, capabilities, feature requests, and more.</td>																					
                            </tr>
                            
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C06PC8C7Z8A" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-cas-rnd-issue-questions</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">This channel is designated for questions related to questions or issues that customers have raised that may be due to the product not functioning properly. For obvious bugs or issues, please open a PCSUP.</td>																					
                            </tr>
                        </table>

                        
                        <!-- Data Sec - Slack Contents-->
                        
                        <h4 style="margin-top:15px">Data Security</h4>
                        
                        <table style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <th style="border: 1px solid currentColor; padding: 8px;">Slack Channel</th>
                                <th style="border: 1px solid currentColor; padding: 8px;">Purpose</th>
                            </tr>
                            
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C06LR3LR2CC" target="_blank" style="color: blue; text-decoration: underline;"><strong>#prisma-cloud-dspm</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Leverage this channel for enablement and technical queries for DSPM and AISPM</td>																					
                            </tr>
                            
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C01ARTD3CSK" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcds-ga-support</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">This channel is a place to ask questions about Prisma Cloud Data Security (PCDS).</td>																					
                            </tr>
                            
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C06B7E77MLH" target="_blank" style="color: blue; text-decoration: underline;"><strong>#dspm-aispm-sales-queries</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">An platform to ask sales queries about Dig / Prisma Cloud DSPM & AI-SPM</td>																					
                            </tr>
                        </table>

                        <!-- Other - Slack Contents-->
                            
                        <h2 style="margin-top:15px"><span>Others</span></h2>
                        
                        <table style="border-collapse: collapse; width: 100%;">
                            <tr>
                                <th style="border: 1px solid currentColor; padding: 8px;">Slack Channel</th>
                                <th style="border: 1px solid currentColor; padding: 8px;">Purpose</th>
                            </tr>
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CD2HQJ7HN" target="_blank" style="color: blue; text-decoration: underline;"><strong>	gcs-all</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">global, gcs employees</td>																					
                            </tr>
                            
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CFHE16ZJB" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-org-all</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Updates and announcements for all cross-functional members of the Public Cloud Security team</td>																					
                            </tr>
                            
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/CPFMG26R3" target="_blank" style="color: blue; text-decoration: underline;"><strong>#prismacloudtuesdays</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Weekly touchpoint with Sales where we can bring them timely and relevant content on Prisma Cloud</td>																					
                                																					
                            </tr>
                            
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="https://paloaltonetworks.enterprise.slack.com/archives/C0125LPB64A" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-competition</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">Competitions</td>																					
                            </tr>
                            
                            <tr>																				
                                <td style="border: 1px solid currentColor; padding: 8px;"><a href="PCSUP tickets status" target="_blank" style="color: blue; text-decoration: underline;"><strong>#pcs-support-alerts</strong></a></td>
                                <td style="border: 1px solid currentColor; padding: 8px;">test</td>
                            </tr>
                        </table>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-cwp" role="tabpanel" aria-labelledby="nav-cwp-tab">
                    <div class="tab_inner">
                        
                        <ul>
                            <li><a href="" target="_blank">lApplication Container Security Guideink</a></li>
                            <li><a href="" target="_blank">Playbooks</a></li>
                            <li><a href="" target="_blank">linCookbook (Need Github Access)k</a></li>
                            <li><a href="" target="_blank">Sprint and Release Tracker</a></li>
                            <li><a href="" target="_blank">Bugs & Sprints (ETA for Fix)</a></li>
                            <li><a href="" target="_blank">CWP Specific Escalation process (PCSUP)</a></li>
                            <li><a href="" target="_blank">Lab Inventory</a></li>
                            

                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-cs" role="tabpanel" aria-labelledby="nav-cs-tab">
                
                    <div class="tab_inner">
                        <ul>
                            <li><a href="" target="_blank">Bridecrew Workflow</a></li>
                            <li><a href="" target="_blank">Code Security Troubleshooting</a></li>
                            <li><a href="" target="_blank">TAC Run-book</a></li>
                            <li><a href="" target="_blank">Lab Inventory</a></li>

                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-dig" role="tabpanel" aria-labelledby="nav-dig-tab">
                    <div class="tab_inner">
                    
                        <ul>
                            <li><a href="" target="_blank">Cider Beta (Early Access ) - Playbook</a></li>
                            <li><a href="" target="_blank">linCAS Team  (Engineering Team)k</a></li>
                            <li><a href="" target="_blank">CI/CD security module - Beta training recording (Passcode: h*!Tk8fpjw)</a></li>
                            <li><a href="" target="_blank">link</a></li>
                            <li><a href="" target="_blank">link</a></li>
                        </ul>
                        <h4 style="margin-top:15px">Google Docs</h4>
                        <ul>
                            <li><a href="" target="_blank">Cider Google Drive </a></li>
                            <li><a href="" target="_blank">CAS Escalation Process</a></li>
                            <li><a href="" target="_blank">Prisma Cloud CAS Escalation Template  - to be used as guidance to engage CAS development team which is developed in collaboration with the Cider and Code Security (Bridgecrew) team.</a></li>
                            <li><a href="" target="_blank">CAS team domains and responsibilities </a></li>
                            <li><a href="" target="_blank">CAS Support Troubleshooting</a></li>
                            <li><a href="" target="_blank">CAS How to Articles</a></li>
                            <li><a href="" target="_blank">Application Security Beta User Guide</a></li>

                        </ul>
                        <h4 style="margin-top:15px">NPI Trainings</h4>
                        <ul>
                            <li><a href="" target="_blank">NPI Slides / Presentation</a></li>
                            <li><a href="" target="_blank">NPI Recording (Passcode :psHticN^2y)</a></li>
                            <li><a href="" target="_blank">Prisma Cloud: CI/CD security [Cider] (Darwin GTM)</a></li>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <style>
        .slider_cont{
            color:#fff;
            padding:20px;
            
        }
        .slider_cont h3{
            color:#fff;
            font-weight:700;
        }
        </style>
        <style>
            .slider_cont{
                transition:1s;
                position:fixed;
                right:-100%;
                background:url(assets/img/banner.svg),linear-gradient(180deg,#02212f 50%,#00667e 99.9%);
                bottom:0;
                height:70vh;
                width:60%;
                padding-bottom:250px;
                overflow-y:scroll;
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none; /* IE and Edge */
            }
            .slider_cont.active{
                position:fixed;
                transition:1s;
                right:0;
                background:linear-gradient(180deg,#00667e 50%,#02212f 99.9%);
                background-size:cover;
                background-position:center;
                /* background:red; */
                bottom:0;
                height:70vh;
                width:60%;
                padding-bottom:250px;
                overflow-y:scroll;
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none; /* IE and Edge */
            }
            .faq-2{
                position:relative;
                height:70vh;
                overflow-y:scroll;
                scrollbar-width: none; /* Firefox */
                -ms-overflow-style: none; /* IE and Edge */
            }
        </style>
      
    </section>

  </main>

  <!--<footer id="footer" class="footer">

    
    
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Prisma Cloud Marvel</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        
      </div>
    </div>

  </footer>-->

  
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <div id="preloader"></div>
          <?php include("script.php"); ?>
          <script>
            
          </script>
</body>

</html>