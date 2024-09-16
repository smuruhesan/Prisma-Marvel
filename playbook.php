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
            <h1>Playbooks</h1>
            <p><a href="https://confluence-dc.paloaltonetworks.com/display/Playbooks/Prisma+Cloud+Playbooks" target="_blank">Playbook Hub</a></p>
            
          </div>
        </div>
      </div>

    </section>

    <!-- Main Content to list Playbooks -->
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
        
        <!-- Sub Menu tab in the page -->
        <div class="container tab_cont" id="srink_list" >
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-cloudsec-tab" data-bs-toggle="tab" data-bs-target="#nav-cloudsec" type="button" role="tab" aria-controls="nav-cloudsec" aria-selected="true">Cloud Security</button>
                    <button class="nav-link" id="nav-runtimesec-tab" data-bs-toggle="tab" data-bs-target="#nav-runtimesec" type="button" role="tab" aria-controls="nav-runtimesec" aria-selected="false">Runtime Security</button>
                    <button class="nav-link" id="nav-appsec-tab" data-bs-toggle="tab" data-bs-target="#nav-appsec" type="button" role="tab" aria-controls="nav-appsec" aria-selected="false">Application Security</button>
                    <!--<button class="nav-link" id="nav-dig-tab" data-bs-toggle="tab" data-bs-target="#nav-dig" type="button" role="tab" aria-controls="nav-dig" aria-selected="false">Dig</button>-->
                    <button class="nav-link" id="nav-process-tab" data-bs-toggle="tab" data-bs-target="#nav-process" type="button" role="tab" aria-controls="nav-process" aria-selected="false">Process</button>
                </div>
            </nav>
            <!-- Sub Menu Contents -->
            <div class="tab-content" id="nav-tabContent">
                <!-- Playbook > CSPM Content -->
                <div class="tab-pane fade show active" id="nav-cloudsec" role="tabpanel" aria-labelledby="nav-cloudsec-tab">
                    <div class="tab_inner">

                        <h4 style="margin-top:15px">Escalation Template</h4>
                        <ul>

                            <li><a href="https://docs.google.com/document/d/1Y9tvp-bFsMo00cPCp8LhB5HBE__T1xv2Q4wi5MIwZz0/edit" target="_blank">CSPM Escalation Template (by TAC)</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/x/8QG_6" target="_blank">CSPM, Platform - PCSUP Escalation Template (from CE Team)</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/x/iABv6Q" target="_blank">MPL Escalation Template</a></li>
                        </ul>   

                        <h4 style="margin-top:15px">Runbooks</h4>
                        <ul>
                            <li><a href="https://docs.google.com/spreadsheets/d/12PTtHpkc6sMWKbHKdyxbfiTBICrSSipkJ8iUrOkH1sU/edit?gid=1143188813#gid=1143188813" target="_blank">Prisma Cloud Service & API Catalog</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCSCRE/pages/4033249595/Prisma+Cloud+CE+Runbooks" target="_blank">Prisma Cloud CE Run Book</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCSCRE/pages/3914629864/CSPM+Escalation+Runbook" target="_blank">CSPM Escalation Runbook</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/x/xQDa0Q" target="_blank">CE Knowledge Base</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/x/soQ-1g" target="_blank">Troubleshooting and Runbooks</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCSCRE/pages/3940811101/Runbook+-+Alerts" target="_blank">Runbook - Alerts</a></li>
                            <li><a href="https://docs.google.com/document/d/1T7sUmFqiGFXyaNhhJcvuPZ730zW9SCrWUD5ORqvamFQ/edit" target="_blank">EVENT ASSISTED INGESTION</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/RED/pages/4011491329/AWS+Audit+Logs+Using+Eventbridge+Troubleshooting+Guide" target="_blank">AWS Audit Logs Using Eventbridge Troubleshooting Guide </a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/RED/pages/3828154625/AWS+Audit+Logs+Ingestion+using+Eventbridge+-+CFT" target="_blank">AWS Audit Logs Ingestion using Eventbridge - CFT</a></li>
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCSCRE/pages/4065035036/AWS+Flowlogs+Ingestion" target="_blank">AWS Flowlogs Ingestion</a></li>
                        </ul> 


                        <h4 style="margin-top:15px">Onboarding</h4>
                        <ul>
                            <li><a href="https://docs.google.com/document/d/16IujPWkzLdcGIRcuo-7WmvhesQKtqg7_1r4_4Dt17iE/edit#heading=h.60hwt5mhb3hm" target="_blank">Onboarding AWS Organization in Prisma Cloud</a></li>
                            <li><a href="https://docs.google.com/document/d/1kcbxib5cJlSIW2ePIoP8KSdlbXO90KRXTvPvS--EsAQ/edit#heading=h.ngikpzrnnl5w" target="_blank">Azure Subscription Onboarding - Manual Method *</a></li>
                            <li><a href="https://docs.google.com/document/d/1BAhazL_BjSb5sxLdUfKxq9TI7z0_yEBIDLvWwkunTbc/edit#heading=h.9yti912igfwd" target="_blank">Azure Tenant Manually Onboarding CSPM</a></li>
                            <li><a href="https://docs.google.com/document/d/1N8PWIJrMd4b9A34C7PdFEbqBWKzJoh_f8YlRpULhqlA/edit#heading=h.9yti912igfwd" target="_blank">GCP Folder Level Onboarding Steps</a></li>
                        </ul>  

                        <h4 style="margin-top:15px">SSO and Login</h4>
                        <ul>                          
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/Playbooks/Prisma+Cloud+Playbook%3A+Login+Issues" target="_blank">Prisma Cloud Playbook: Login Issues</a></li>
                            <li><a href="https://docs.google.com/document/d/1hGGllxdbxhluiAyxx-nN3c2fe9ish5kJiHFShv1B7UU/edit#heading=h.gjdgxs" target="_blank">SSO Runbook</a></li>
                            <li><a href="https://docs.google.com/document/d/10o5GoqYmcfMyeNYbCsJID9I6K95O7fYJXxaANZeidzU/edit#heading=h.ml3ak01vbh8l" target="_blank">Configure Prisma Cloud with AWS SSO</a></li>
                            <li><a href="https://confluence.paloaltonetworks.com/display/CSO/How+to+Enable+JIT+for+ADFS" target="_blank">Enable JIT for ADFS</a></li>
                            <li><a href="https://docs.google.com/document/d/1NSv24gYTQCAG8KpqP5yjVXaoqbFgubC13O43nXL5NIA/edit#heading=h.7tbvov29ospq" target="_blank">Enabling SSO with Azure AD</a></li>
                            <li><a href="https://docs.google.com/document/d/1NQORUE5lIz-i27OcSu-VyccubD_Q3D94V4tpgCN3xKQ/edit#heading=h.gjdgxs" target="_blank">Enabling SSO with GSuite</a></li>
                            <li><a href="https://confluence.paloaltonetworks.com/pages/viewpage.action?pageId=193697346" target="_blank">How to setup G Suite (Google IDP) w/ SSO in Prisma Cloud</a></li>
                            <li><a href="https://confluence.paloaltonetworks.com/display/CSO/How+to+setup+G+Suite+SSO+Just+in+Time+Provisioning+%28JIT%29+Skip+to+end+of+metadata" target="_blank">How to setup G Suite SSO Just in Time Provisioning (JIT) Skip to end of metadata</a></li>
                            <li><a href="https://confluence.paloaltonetworks.com/pages/viewpage.action?pageId=189568431" target="_blank">Enable JIT for Multiple SSO Users - Okta</a></li>
                            <li><a href="https://confluence.paloaltonetworks.com/pages/viewpage.action?pageId=214666177" target="_blank">How to Test/setup OneLogin SSO Just in Time Provisioning (JIT) with Prisma Cloud</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/How+To+read+saml+response+for+Prisma+Cloud" target="_blank">How To read saml response for Prisma Cloud</a></li>
                        </ul>  


                        <h4 style="margin-top:15px">Integration</h4> 
                        <ul> 
                            <li><a href="https://docs.google.com/document/d/185XRVwlwzaMODB2ZDGYnkoix2LCMXbHOPqw70Chuy-Y/edit" target="_blank">Scoped Data Ingestion for XSOAR</a></li>
                            <li><a href="https://docs.google.com/document/d/1LU6XBYCvT1OfzDbhYrDxhAPnkDjnpDsUfO36k76tiSE/edit#heading=h.9yti912igfwd" target="_blank">Integrating with Cortex XSOAR (Demisto)</a></li>
                            <li><a href="https://docs.google.com/document/d/1H3TtMUagV_K2es31M3rCr2H0F7u7rY8_LZfSg7lcmk0/edit#heading=h.gjdgxs" target="_blank">Splunk Enterprise integration in Prisma Cloud</a></li>
                            <li><a href="https://docs.google.com/document/d/1X3vaeelH02GZY0no4LwETEgU7PZ4s5iitjzN__85R90/edit#heading=h.30j0zll" target="_blank">Configure Prisma Cloud Webhooks Integration</a></li>
                            <li><a href="https://docs.google.com/document/d/1LmkRPOHmYBtOCN7xeEuFYXDJ9L-aK-H9-VnISyl6VL0/edit#heading=h.9yti912igfwd" target="_blank">Trello</a></li>
                        </ul>  

                        <h4 style="margin-top:15px">Anomaly Detections</h4>  
                        <ul>
                            <li><a href="https://docs.google.com/document/d/1-Nc0MkgVmM3JWr6Q4Rgj20n6Bbqw9ucLaKmWRX_AMp4/edit#heading=h.9yti912igfwd" target="_blank">Anomaly Settings in Prisma Cloud CSPM</a></li>
                            <li><a href="https://docs.google.com/document/d/1tHIum4Offwmq6rcLNDub-JNqoKw_L-LpY-6f661j49U/edit#heading=h.9yti912igfwd" target="_blank">PCS AutoFocus-based Anomaly Policies</a></li>
                            <li><a href="https://docs.google.com/document/d/1cb8WTMz3hNviHnLDMW9Cp8qlSDFA9HurFEnRDqvtNK4/edit#heading=h.9yti912igfwd" target="_blank">Detecting Cryptojacking Attacks with the UEBA Anomalous Compute Provisioning Anomaly Policy</a></li>
                            <li><a href="https://docs.google.com/document/d/1_mrL_AX_QenysjTOafH9j3l0CoobO9ks4IpJxGP-Mro/edit#heading=h.9yti912igfwd" target="_blank">Using AWS and Azure to Generate Port Scan and Port Sweep Alerts on Prisma Cloud</a></li>
                            <li><a href="https://docs.google.com/document/d/1wCNRqMKMuPiNeHZAUoi4mLe3__wbfK5SbIcK_eHas-g/edit" target="_blank">Detection of Potentially Malicious Activity in the Cloud using UEBA Suspicious Activity Policies</a></li>
                            <li><a href="https://docs.google.com/document/d/19YiNaGxe3Lq5h5_o6ANfU93Ar23mGcHrELQeIQi7tVg/edit#heading=h.m88rrmxc5nw8" target="_blank">UEBA Anomaly Policies - Overview, Alert Generation, and Support Application</a></li>
                            <li><a href="https://docs.google.com/document/d/1yWmInk_Bb2FNemyHpzGBwpOhTKikAZUFbhxTVjPx09I/edit#heading=h.33y69pn30c7v" target="_blank">Generation of Unusual User Activity Alerts</a></li>
                            <li><a href="https://docs.google.com/document/d/1R5P32r7XQ6wnH3voQiBbNIZjaGujpUUjkjIQD1Ra4Ro/edit#heading=h.33y69pn30c7v" target="_blank">Generation of Excessive Login Failures Alerts</a></li>
                            <li><a href="https://docs.google.com/document/d/1lJ6Hr93vMXHLvKzn935biN1ldjJwMAvJd5Hoi_ffWRE/edit#heading=h.33y69pn30c7v" target="_blank">Generation of Account Hijacking Attempt Alerts</a></li>
                        </ul>

                        <h4 style="margin-top:15px">Others</h4>
                        <ul>  
                            <li><a href="https://docs.google.com/document/d/1Hm4KrPOVJuCsIZg2hWf74TJqEeoluxixHWFM6jeSVW0/edit" target="_blank">Custom Compliance Dashboard</a></li>
                            <li><a href="https://docs.google.com/document/d/1kGvo41wOjNlMdo-tXmLb5Lb3iEZm-LIrwAobtsb5DJg/edit#heading=h.30j0zll" target="_blank">Custom Remediation Actions</a></li>
                            <li><a href="https://docs.google.com/document/d/17Me7CncfxyJqGu9RuXFLnXuM4VZISs58wd4U3vzS1kI/edit#heading=h.ml3ak01vbh8l" target="_blank">Troubleshooting Using Splunk</a></li>
                            <li><a href="https://docs.google.com/document/d/1kdczRb8cxHzGlL20HzwQnHEbrVPJFtIqh1rZTO-osi4/edit#heading=h.9yti912igfwd" target="_blank">Getting Started with Prisma Cloud API</a></li>
                            <li><a href="https://docs.google.com/document/d/1sVO01Pr6T729QgIntT8ySp3Y71KXuGu4MptQj_CikDg/edit#heading=h.30j0zll" target="_blank">How to Create Custom Policies with RQL</a></li>
                        </ul>  

                        <h4 style="margin-top:15px">Technotes</h4>
                        <ul>  
                            <li><a href="https://theloop.paloaltonetworks.com/loop/prisma-cloud-technote" target="_blank">Prisma Cloud Technotes</a></li>
                            <li><a href="https://docs.google.com/document/d/17NVDSeE8A1dmMx6lqda1Rv6aBoHzUBJkwPqZInoGYQw/edit#heading=h.9yti912igfwd" target="_blank">Detecting Compromised Computing Resources with DGA detection Policy</a></li>
                            <li><a href="https://docs.google.com/document/d/1ghlAhpZiCbIyY_vGnYRQgNAcJSWf8QMt1M4KBIMMqZo/edit#heading=h.9yti912igfwd" target="_blank">Detecting Cryptojacking Attacks with DNS Request Logs</a></li>
                            <li><a href="https://docs.google.com/document/d/1s8wrBQi5duxlJCBmBr-2XLqHBmFsx6m9x6TUHfvRAHU/edit#heading=h.9yti912igfwd" target="_blank">Enable Dataflow Compression in GCP with Terraform</a></li>
                            <li><a href="https://docs.google.com/document/d/1CU8NHKhxjPooYh29h1vJ7XOhqFUfePVjSvvlR9JL8Wg/edit" target="_blank">Alerts from Rulesets</a></li>
                            <li><a href="https://docs.google.com/document/d/1CO9mYi61WHzDo-uHehnCVn2oBHz1c1Wyx1-saVV-Ax8/edit" target="_blank">CNS-External Networks from Somewhere</a></li>
                            <li><a href="https://docs.google.com/document/d/1U34CZbsldE5AtSwjy71MQ1MxePBy5uODVy8fyHuvJaI/edit#heading=h.9yti912igfwd" target="_blank">ReportsQuery to get Flow Logs with filter</a></li>
                        </ul>  

                        
                        <h4 style="margin-top:15px">Postman API</h4>
                        <ul>  
                            <li><a href="https://github.com/PaloAltoNetworks/pcs-postman" target="_blank">Instructions on how to setup the Postman Collections and Environments relating to Prisma Cloud (including Compute Console) API requests</a></li>
                            <li><a href="https://documenter.getpostman.com/view/2937330/SWTBdxFJ" target="_blank">Prisma Cloud API	
                        </ul>  
                            
                    </div>
                </div>

                <!-- Playbook > CWP Content -->
                <div class="tab-pane fade" id="nav-runtimesec" role="tabpanel" aria-labelledby="nav-runtimesec-tab">
                    <div class="tab_inner">

                        <h4 style="margin-top:15px">Escalation Template</h4>
                            <ul> 
                                <li><a href="https://redlock.atlassian.net/wiki/x/9AEOnQ" target="_blank">Compute specific Escalations process</a></li>										
                            </ul>

                        <h4 style="margin-top:15px">Installation</h4>
                        <ul> 
                            <li><a href="https://drive.google.com/drive/folders/1CDZsdDBNAN9Sz322oJji-NWPdWiF-bwQ" target="_blank">Internal Lab - Console on Onebox*</a></li>																			
                            <li><a href="https://drive.google.com/drive/folders/1CDZsdDBNAN9Sz322oJji-NWPdWiF-bwQ" target="_blank">Onebox - Console and defender installation in our Lab Env</a></li>																			
                            <li><a href="https://docs.google.com/document/d/140GVNhYlpUMdHHHy5wfYMPYhWxjXgC8L2XjMQMOrXqc/edit#heading=h.9yti912igfwd" target="_blank">OpenShift Container Platform (OCP) Deployment Troubleshooting</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1Bc-vTsa-vSMFiy0xfSfkNX2B1OlKeVUFQAChO70NYWg/edit#heading=h.30j0zll" target="_blank">Prisma Cloud Compute Lab – GCP/GKE</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1E3Ikvie-J_jWHFSCSUXpU-TCm6O2ih_Uvz4IAHxnRWg/edit?usp=sharing" target="_blank">Console Crashes*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1rwkJefA9kYpImmKYh7PmJN5UK73PU017kiqg0hmOovc/edit?usp=sharing" target="_blank">Performance Issues*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/10leg9cxDSLYN8b8JYSSmdpzbUbN_3mCs1MbpKNimiYc/edit#heading=h.83sxofctzfdq" target="_blank">Certificates for Defender console Conncetion*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1yufYsnifFp2gQiTOKlg5NvmtYHu8ZSmiV1BD9JThOTA/edit#heading=h.igpruzfjxy5r" target="_blank">How to use MongoDB to read Twistlock Console DB - Runbook*</a></li>																			
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/Compute+MongoDB+-+Restore+DB+and+Reset+console+password" target="_blank">Compute MongoDB - Restore DB and Reset console password*</a></li>																			                     
                            <li><a href="https://docs.google.com/document/d/1NXaq0Ggi8OS7hsE2Veunlg89wdQLkKl4qNA1rPpy-H4/edit" target="_blank">Installation failure*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1LXYGzbDKwf9aH6t_5dBsVuN9gS_cgIgFGlPR9BWyEOU/edit#heading=h.9yti912igfwd" target="_blank">Deploy Defenders on Tainted Nodes</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1NPIHkEM1qbxq6zzXMajNaQk1lDNzYnTTur8TN3gHlV0/edit" target="_blank">Getting Started with Amazon EKS managed nodes using AWS Cloudshell and Installing Prisma Defender</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1KFAZnLFIl2b3tn9EuoExGpCz5m2KiRjQxLmzogMxaX0/edit#heading=h.gjdgxs" target="_blank">Automating Fargate Task Definitions w/ Defender in CI</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1rfnBi19nEIFe9yO_iasMk8gqdwdyXVQv2Mgp6iRE0U8/edit#heading=h.9yti912igfwd" target="_blank">Protecting Fargate with no EntryPoint</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1cvLjzO_aMAVqpiENXnFGfnr4K7GuuI8kNRCeKuAyBW4/edit#heading=h.30j0zll" target="_blank">App-Embedded Defender On AWS ECS/EKS</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1XSV0rO8_AZwrH-f_2Sa-PQN6Iouy6pmZLefB91cT3ow/edit#heading=h.30j0zll" target="_blank">Deploying an App-Embedded Defender with Azure Web App</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1wCu57ICeA8rRu5NDVWtlTWf-nuCkrMsG4pmzcNImJrQ/edit#heading=h.9yti912igfwd" target="_blank">Serverless Lambda Auto-Protect using Layers</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1jhqmDwog8qb4Q_DTipiEPXg1WQLx4SimHhriTzgeYc8/edit#heading=h.9yti912igfwd" target="_blank">Serverless Lambda Protection Demo Deep Dive</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1DlHHJ19pfeF2wm5sJKxd9Ehrs2pCiInrabaNQj9uUzs/edit#heading=h.74jyd1la2nsh" target="_blank">How-to-Deploy-an-App-to-TAS environment</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1N0jam0sU2tDZRMLlJF17hnoPokEbdSbNGqDm1emD6tI/edit#heading=h.9yti912igfwd" target="_blank">Defender Deployment Using Helm Chart in ArgoCD</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1oCIv1bm-HjbqlJzoYKoBuwC36s_mNlWfAB3mMLLtk8I/edit" target="_blank">Deploy Prisma Cloud Defenders In Azure Red Hat OpenShift (ARO)</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1Bjzv8Ataqbw7lBisYgoLdbrnPCYUO0f7fHQyL_HaGmE/edit?usp=sharing" target="_blank">Auto-defend Host*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1moSV8Nx8cABdWblK4vo8AhIawAMbwKVRIto5QgLx0d8/edit#heading=h.gjdgxs" target="_blank">Getting Started with Amazon EKS managed nodes using AWS Cloudshell and Installing Prisma Defender*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1A2kpIc0SrFJYLAQOFjn_k1lUVx9CeemiLeuqKZW2N0E/edit" target="_blank">Prisma Cloud Console on AWS ECS Fargate - Upgrading Best Practices, Restoring DB and Troubleshooting Tips*</a></li>																			
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/App+Embedded+Defender+Introduction+and+Troubleshooting" target="_blank">App Embedded Defender Introduction and Troubleshooting*</a></li>																			
                        </ul>


                        <h4 style="margin-top:15px">Agentless / Serverless Scanning</h4>
                        <ul>                            
                            <li><a href="https://docs.google.com/document/d/1UD0rZcCPS_0Zr82g4tYr4FcOUqrvFfNk6wWMQb9GkHQ/edit" target="_blank">Agentless VM Scanning for Azure Cloud Accounts</a></li>																			
                            <li><a href="https://redlock.atlassian.net/wiki/spaces/PCC/pages/3920134145/Agentless" target="_blank">Agentless - R&D Confluence page</a></li>
                            <li><a href="https://docs.google.com/document/d/1cvOLShnL7rtMqY9NCEX21WEda7gnww4RKQBweNzqXQo/edit#heading=h.anotymn3g8ec" target="_blank">Agentless FAQ</a></li>		
                            <li><a href="https://docs.google.com/document/d/1NRBTkNnjFEHsmUKsKWsEsfcBWDca0qq0r1NPTeT7Hb8/edit#heading=h.anotymn3g8ec" target="_blank">Agentless Troubleshooting and Limitations</a></li>		
                            <li><a href="https://docs.google.com/document/d/1CVwu7RK8T1EzFeEKeBTpbHkgogw4Eu6-2SDzFUNPHlc/edit" target="_blank">Prisma Cloud Agentless Security FAQ</a></li>		
                            <li><a href="https://docs.google.com/document/d/1e20jQrKKPdFsynhvkkx670jcSlkOMFkuOuVGMc-0dFA/edit" target="_blank">Prisma Cloud TechNote - PCEE / SaaS - How to Configure Azure Agentless VM Scanning</a></li>	
                            <li><a href="https://docs.google.com/document/d/1eGFRLZZLQyJ6Pk4tPiIDuqFuzxCqwUMFqalbb0hoYGI/edit?usp=sharing" target="_blank">Serverless Scan</a></li>			
                        </ul>


                        <h4 style="margin-top:15px">Image Scanning</h4>
                        <ul> 																	
                            <li><a href="https://docs.google.com/document/d/1_0R2Htel1fyB4BZ8PO6es53B4FzeHwkZgd5iawAKDwg/edit#heading=h.gjdgxs" target="_blank">Understanding Registry Scanning*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1qFz33RLjq4ikybyD9GDDHZJ4fS-Ahgq81O194XBnaH0/edit#heading=h.9yti912igfwd" target="_blank">JFrog Artifactory Cloud</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1qyEZq0I6F4BbAV-8hMWSlHOZPyF7x2FwosAASaR6muI/edit#heading=h.9yti912igfwd" target="_blank">Scan registries with untrusted certificate (OpenShift CRI-O)</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1VkCV3mXMrEeqalwP4JVhj_BnxEyXhgeMjQ9SP9YNmjA/edit?usp=sharing" target="_blank">Image Scan*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1qJhiEERBp-uFSTesCQNSgOe5bwDsfhXrWVEddFGsI5I/edit" target="_blank">VM Image Scan*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1e5MnJLvTV18iqmRkNXiYeP0fNoQbkYAMx-usaikgbJA/edit?usp=sharing" target="_blank">Malware Testing for Container Runtime and Image Scan*</a></li>																			
                            <li><a href="https://drive.google.com/drive/folders/18n1jvvwLoPkedxL4ykNQxfZrL-NN_qRN" target="_blank">Alibaba Cloud Container Registry*</a></li>																			
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/Google+Cloud+Artifact+Registry+Scan+using+Prisma+Cloud+Compute" target="_blank">Google Cloud Artifact Registry Scan using Prisma Cloud Compute*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1LfNbrUnFfslky01gX8IsjdpSpnv0slIF/edit" target="_blank">Alibaba Cloud Container Registry (ACR) Scan using Prisma Cloud*</a></li>
                        </ul>


                        <h4 style="margin-top:15px">CI CD Integrations</h4>
                        <ul> 																			
                            <li><a href="https://docs.google.com/document/d/1JMZKLbeS6L-cy0xwVIztrtAvlZ4vMDRR_2vUOcS6z7c/edit#heading=h.ml3ak01vbh8l" target="_blank">Intro Lab to Setup and Secure Jenkins CI Pipelines</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1GzgjC-4yijoNyqCl_yyIUshrTPR2LRsopqdpkpPX46A/edit" target="_blank">Github Actions demo</a></li>																			
                            <li><a href="https://drive.google.com/file/d/1uxuMsmAmar3eRRS78WtdrttJGu6AR_fM/view" target="_blank">Scanning Images with Google Cloud Build</a></li>																			
                            <li><a href="https://docs.google.com/document/d/12bFg7oAwrw5WOTz9it2CcgbMhr1cXReXGfE5_RKGuZw/edit" target="_blank">Scanning Images built using Kaniko</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1FC-JnFP7EhpjBZ8PzYOgF0j5ud3tJUWKKwjQYN8U61M/edit#heading=h.ml3ak01vbh8l" target="_blank">Integrating Codefresh with Prisma Cloud Compute</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1Y4F5F6eK9t2t-Ur47EXWCwjUYf4EKUq2aY_RBwWTxSY/edit?usp=sharing" target="_blank">Azure Devops Scan*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1QwAFjM7j7eR43N2hPtWiIv7pQRBybmrwMXSvD1nXrj0/edit?usp=sharing" target="_blank">Github Repo Scan*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1K0KLKLdAV1XbJIDIi-MkshXHHkuUAZWsdOyEJxE271I/edit?usp=sharing" target="_blank">Jenkins Scan*</a></li>																			
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/How+to+build+jenkins++and+integrate+with+prisma+cloud+compute" target="_blank">How to build jenkins and integrate with prisma cloud compute*</a></li>																			
                        </ul>


                        <h4 style="margin-top:15px">WAAS</h4>
                        <ul> 
                            <li><a href="https://github.com/PaloAltoNetworks/pcsdemo-resources/tree/main/demo-guides/waas" target="_blank">WAAS Demo Guide</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1ISo6Mon0-wWsJrZdbPpRiVx_buOYNR8uciKioUIYzy4/edit#heading=h.9yti912igfwd" target="_blank">WAAS Firewall Policy Certificate Modification via API</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1mGzjuVquDiPPjrVggs-ieTacA-av-17ukH-BCd1zjaU/edit#heading=h.9yti912igfwd" target="_blank">WAAS Firewall Policy Modification via API</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1qDQdemfvLQJZzNJ5LSQ0L_ZFZrOd-didOVh2NFrKaJg/edit#heading=h.dpx8ql9uclpn" target="_blank">Protecting Web Applications in Windows Hosts</a></li>																			
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/Playbooks/Prisma+Cloud+Playbook%3A+App-Embedded+ECS-Fargate+for+WAAS" target="_blank">Prisma Cloud Playbook: App-Embedded ECS-Fargate for WAAS*</a></li>																			
                        </ul>


                        <h4 style="margin-top:15px">Vulnerability</h4>
                        <ul> 
                            <li><a href="https://docs.google.com/document/d/1rxr-u9wqtjp7P76NjQBqUPVIomxRoXmrFXhfpA8ifFg/edit#heading=h.9yti912igfwd" target="_blank">Vulnerability Management - DevOps/Jenkins</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1I8S2JZal4bNSWt4CNMjyrPxq5krkz66nq3s32UCBWyc/edit#heading=h.9yti912igfwd" target="_blank">FAQ on CVE*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/10Hgn9tzx1zxouWBcTdg70Nxjana88Kmk-wjHOTZO2Eg/edit?usp=sharing" target="_blank">Packages*</a></li>	
                        </ul>


                        <h4 style="margin-top:15px">Runtime</h4>
                        <ul> 																		
                            <li><a href="https://docs.google.com/document/d/1rRD5TuBAvN2-M8xHEoLWJHpl3A-ZM2EvEjSz8rc7otg/edit#heading=h.z43c3hi81f6" target="_blank">Runtime Protection</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1XoCmNju5oNHn2mKb6DoovSCycnT0Bh3gBFufOGuWB5c/edit?usp=sharing" target="_blank">Runtime Rules*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1_r9YpRMwYf86Ta9LT3t5VsVSIog9794NE77rc037w_Q/edit#heading=h.gjdgxs" target="_blank">Runtime Forensics FAQs*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1UOzBgh1kb_n1zUcg5knMBHJjFVa-RSC4j7d1ZfhgDv8/edit" target="_blank">Network Protection</a></li>																			
                            <li><a href="https://docs.google.com/document/d/17aOuoJq1SX30kW5AC8qWIwP4XtvFHZsFksA6jcU1CSk/edit#heading=h.9yti912igfwd" target="_blank">Verify Secrets Integration</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1YAKGDRSRHWgx6_mprGpgeUIzFRmha0DoCE6mHGKyjlY/edit" target="_blank">Protecting Secrets</a></li>
                        </ul>


                        <h4 style="margin-top:15px">Admission Control</h4>
                        <ul> 																		
                            <li><a href="https://docs.google.com/document/d/1DVjcFhAHzrQhV5GQ5m4RBnGkGFyYqp8eJYy0qGQo10Y/edit#heading=h.9yti912igfwd" target="_blank">OPA (Admission Control) Configuration, Monitoring & Examples</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1dIovGv9A5tGMMHM6kWo11roDeVlHoxhtiK-YS6GdZVQ/edit?usp=sharing" target="_blank">Kubernetes Auditing*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1wMG7Z-CDdNzx-aPgWpGoEkegofHgOl5V7q377GCrR3g/edit?usp=sharing" target="_blank">Admission Controller*</a></li>	
                        </ul>
                        

                        <h4 style="margin-top:15px">Wildfire</h4>
                        <ul> 																
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/Playbooks/Prisma+Cloud+Playbook%3A+WildFire+API+Key%2C+License%2C+and+Association+to+Prisma+Cloud+Compute" target="_blank">Prisma Cloud Playbook: WildFire API Key, License, and Association to Prisma Cloud Compute*</a></li>																			
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/Playbooks/Prisma+Cloud+Playbook%3A+WildFire+Integration" target="_blank">Prisma Cloud Playbook: WildFire Integration*</a></li>	
                        </ul>	


                        <h4 style="margin-top:15px">Others</h4>
                        <ul> 																	
                            <li><a href="https://docs.google.com/document/d/1mUy04rKyuk30cm1f0Mkh433-6gCp2r3bWb4qIoshqRU/edit" target="_blank">TCPDump in OpenShift</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1xtAKCGcJqBWpEXGt4pHtfy6nlR6HAh1WjQ6-EyQ83gs/edit#heading=h.9yti912igfwd" target="_blank">Rulesets across namespaces</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1wfw5GPankf3iz-F8MV7NLpkRN-ztRGJ2BLm0CrJzgbc/edit#heading=h.9yti912igfwd" target="_blank">Trust Self-Signed Certificate Authority in Defender</a></li>																			
                            <li><a href="https://docs.google.com/document/d/16UETqtEEoNW6ym3Z7-hATUnuArW5sglRmgVOMNphe54/edit#heading=h.9yti912igfwd" target="_blank">K8s Audit Logging in SaaS</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1DC5NIPYFp2xuhAV9BxVABv8vLLUx2fhJdNIEZGLBjmU/edit#heading=h.gjdgxs" target="_blank">Pod Security Policy for Defender</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1cebeLyfE-PFT3Z1jspZ_zaikwSDR9XCk_vykSkLBNcA/edit#heading=h.9yti912igfwd" target="_blank">Automate policies with Terraform Prisma Cloud Compute provider</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1Zw4YX7lmVF3qnsfdxvfR0TW6FyJFcl8z-x1CB5yhqNo/edit#heading=h.30j0zll" target="_blank">How to add the Account-IDs in the Non-Onboarded Account IDs field of Account Groups</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1JcHWybEX3NVz8Iz0DbonomM2nJ-13cBrBoU3pdA99A4/edit#heading=h.9yti912igfwd" target="_blank">Prometheus with Grafana deployment on Kubernetes</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1mORnKnHuryO4vtG80iv7wT-lMimP9Un_AAOmSqRP-FY/edit#heading=h.9yti912igfwd" target="_blank">Injecting Secrets into Containers using HashiCorp Vault</a></li>																			
                            <li><a href="https://docs.google.com/document/d/16vZ0YDWLCeIO5pMkVKQlaOjSMA8C0kmDFvahaA6C4cU/edit?usp=sharing" target="_blank">Cloud Discovery*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1GPtDguJZ_HaF1lFsnjBQlFREQUFcOwUPvkeQAjtX_-o/edit?usp=sharing" target="_blank">Authentication*</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1R6LoL5PaWCU4KYFNZQ7ZFTjs-UBPqiv3TZB0rs-BnUM/edit?usp=sharing" target="_blank">Syslog*</a></li>																			
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/ADFS+Playbook+by+Jay" target="_blank">ADFS Integration with Self Hosted Console* </a></li>																			
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/Webhook+integration" target="_blank">Webhook integration*</a></li>
                            <li><a href="https://docs.google.com/document/d/12kwXRZau9wg5hHV5TpEbn5st5XqAVFbcfxJM9Y-e5iM/edit#heading=h.9yti912igfwd" target="_blank">Integration to Splunk</a></li>	
                        </ul>


                        <h4 style="margin-top:15px">Technotes</h4>
                        <ul> 
                            <li><a href="https://docs.google.com/document/d/1e20jQrKKPdFsynhvkkx670jcSlkOMFkuOuVGMc-0dFA/edit#heading=h.9yti912igfwd" target="_blank">PCEE / SaaS - How to Configure Agentless VM Scanning for Azure Cloud Accounts</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1vdGrxHxORyM-xr4Jy4EWLyd5eln_smjdHr0_iLVMcII/edit" target="_blank">PwnKit and Prisma Cloud</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1lJLV_ft_TIFbPmtvtZerBtOK77yYqpHtjHd-smUl3_8/edit" target="_blank">How To Extend a Tenant Subscription Expiration</a></li>																			
                            <li><a href="https://docs.google.com/document/d/13ShrSzRxBxRO77mVKYy9OcHwRgcO_SIbF-k5lUGY2Ng/edit" target="_blank">Namespaces to match orgs in GCP</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1MSI2defdI6Qimt2TVNQ4dQfDOklCF9q7MtWNQGR9T0M/edit#heading=h.9yti912igfwd" target="_blank">Automation with AzureDevOps Pipeline</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1z6xfpV48qvPGIA69hGhq1hCUFga6uEV3L7wRMkZpbyE/edit#heading=h.9yti912igfwd" target="_blank">Prisma Cloud Reporting of Non-CVE Vulnerabilities</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1JC9iVe9lP8luTfUu-8bUlW1V3GQ3Q_g9KDiqYK377I0/edit#heading=h.9yti912igfwd" target="_blank">Competitive CVE Analysis Using Prisma Cloud Compute</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1E0Yw9TPk_5n0iMcyoO3D_DSqz5YFNoZjgXuRzjWHZng/edit#heading=h.9yti912igfwd" target="_blank">Detecting Cryptojacking Attacks with the UEBA Anomalous Compute Provisioning Anomaly Policy</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1nHNV-knSdy1nLJNTKLl7hue5RvcOIake4p4Cezib5y8/edit#heading=h.30j0zll" target="_blank">Using ingress-controller to modify an on-prem Compute console contextual path</a></li>																			
                            <li><a href="https://docs.google.com/document/d/186jWIOuFkQGDLFadiyIkMr8zAgK_oHP22Ct4715B3OY/edit#heading=h.9yti912igfwd" target="_blank">OPA (Admission Control) Feature CONNECT Operation Bug and Workaround</a></li>																			
                            <li><a href="https://docs.google.com/document/d/16GDlL3fi0Zg57ln_ONu9PRaKEzJVk6Bvri7T2nuEcLE/edit#heading=h.ml3ak01vbh8l" target="_blank">Basic Istio Scenarios with the Bookinfo Application for Demo With Prisma Cloud Compute</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1eezShLMcp5ncibu4NYYVII1SE5ygAgWmglR7Wl4tBsg/edit#heading=h.9yti912igfwd" target="_blank">Prisma Cloud Compute Self-Hosted Demo Environment Contributor Guide</a></li>																			
                            <li><a href="https://docs.google.com/document/d/13_y5KDjqGopkVsp7soIHTg8lgOwOqYA-BB-RO6pZSS0/edit#heading=h.9yti912igfwd" target="_blank">Prisma Cloud Compute Self-Hosted Demo Environment Provisioning</a></li>																			
                            <li><a href="https://docs.google.com/document/d/1CVwu7RK8T1EzFeEKeBTpbHkgogw4Eu6-2SDzFUNPHlc/edit" target="_blank">Prisma Cloud Agentless Security FAQ</a></li>			
                        </ul>


																	                    </div>
                </div>

                <!-- Playbook > CAS Content -->
                <div class="tab-pane fade" id="nav-appsec" role="tabpanel" aria-labelledby="nav-appsec-tab">
                    <div class="tab_inner">


                    <h4 style="margin-top:15px">Escalation Templates</h4>
                        <ul>   
                            <li><a href="https://docs.google.com/document/d/19giI_iH35VECXrH9KP0hLdJ15VNPhoZh/edit?actionButton=1#heading=h.ff7zkyokjrud" target="_blank">Prisma cloud Code Security Escalation Template - From Core team</a></li>
                            <li><a href="https://docs.google.com/document/d/1QiJzdz2TOtlZrvVkDHxzR-yAA9ajy_M_c5cLKfnG3uI" target="_blank">Prisma CAS Escalation Template - June 2023</a></li>
                            <li><a href="https://docs.google.com/document/d/1QiJzdz2TOtlZrvVkDHxzR-yAA9ajy_M_c5cLKfnG3uI/edit" target="_blank">Prisma Cloud Code Security/Bridgecrew Escalation Template - DEC 2022 - From TAC Team</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/CASCS/CAS+teams+domains+and+responsibilities" target="_blank">CAS team domains and responsibilities</a></li>
                        </ul> 
                    
                    <h4 style="margin-top:15px">Runbooks</h4>
                        <ul>   
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/CASCS/Cloud+Application+Security+FAQs" target="_blank">Cloud Application Security FAQs</a></li>
                            <li><a href="https://docs.google.com/spreadsheets/d/1AZtU3FCzpMkNi6ctgQVh58Wth03jBxntGqug3PhxZOo/edit#gid=0" target="_blank">CAS How to Articles</a></li>
                            <li><a href="https://docs.google.com/spreadsheets/d/1AZtU3FCzpMkNi6ctgQVh58Wth03jBxntGqug3PhxZOo/edit#gid=0" target="_blank">Common Customer Case Scenario</a></li>
                            <li><a href="https://drive.google.com/drive/u/0/folders/1NP9kKoR8gg43aWyv3RJhxh8O0Xm2jvz2" target="_blank">Weekly Code Security QnA recordings</a></li>
                            <li><a href="https://docs.google.com/document/d/1KVCFEiyQ0FRVjYVp4LTsfuN54LY13kiIavySmHhQhqY/edit" target="_blank">CCS Support Troubleshooting</a></li>
                            <li><a href="https://docs.google.com/document/d/1fo_ZhZQ0mwM4BT1wV56-EHJbmotKb56j1HLSI7Zbyiw/edit" target="_blank">Bridgecrew - Technical FAQs</a></li>
                            <li><a href="https://docs.google.com/document/d/174DhHVHlSiaIEY7fPUM7ugTVt2pWTAmkLZrpajY_APc/edit" target="_blank">Bridgecrew + Cloud Code Security FAQ</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/CASCS/How+to+use+the+Support+Tool" target="_blank">How to use the Support Tool</a></li>
                            <li><a href="https://docs.google.com/document/d/1OOJsReIHfj4TojV4yOtJo4_2t4zGjiaclz_Gvkvt9sA/edit#heading=h.gjdgxs" target="_blank">Install GitLab Self-Managed and integrate with Prisma Cloud Code Security</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/Playbooks/Prisma+Cloud+Playbook%3A+Transporter+Introduction%2C+Lab+Deployment+and+Troubleshooting" target="_blank">Prisma Cloud Playbook: Transporter Introduction, Lab Deployment and Troubleshooting</a></li>
                        </ul>   
                    </div>
                    
                </div>


                <!-- Playbook > Dig Sec Content -->
                <!-- <div class="tab-pane fade" id="nav-dig" role="tabpanel" aria-labelledby="nav-dig-tab">
                    <div class="tab_inner">
                    
                        <h4 style="margin-top:15px">Heading</h4>
                        <ul>
                            <li><a href="" target="_blank">link</a></li>
                            <li><a href="" target="_blank">link</a></li>
                            <li><a href="" target="_blank">link</a></li>
                            <li><a href="" target="_blank">link</a></li>
                            <li><a href="" target="_blank">link</a></li>

                        </ul>
                    </div>
                </div> -->

                <!-- Playbook > Process Playbooks -->
                <div class="tab-pane fade" id="nav-process" role="tabpanel" aria-labelledby="nav-process-tab">
                    <div class="tab_inner">
                    
                    <h4 style="margin-top:15px">TAC Processes Docs</h4>
                        <ul>     
                            <li><a href="https://docs.google.com/document/d/1ES99TemtGAyQahpSfPngYhy4zHQX8qY4OL2on9eqJT0/edit?usp=sharing" target="_blank">TAC Process Playbook</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/pages/viewpage.action?pageId=7012798" target="_blank">Case handling Best Practices and templates</a></li>
                            <li><a href="https://docs.google.com/document/d/1QxAdY3p8TcszeNFU4tUEUOBFqzwxIkfqQhhSXUPew5M/edit#heading=h.gb0bbl74lz0r" target="_blank">CS & TAC SOP Document</a></li>
                            <li><a href="https://docs.google.com/document/d/1hVnOF1LAc3nFlW5tT5nR0AEByW9q_CHouDT23kFaubI/edit?usp=sharing" target="_blank">TAC & CS Case Transfer Handbook</a></li>
                            <li><a href="https://docs.google.com/presentation/d/1NKtKfDT-vcrc_e1_4tL7RQirxGf1j94eaAPeYJj-r7w/edit?usp=sharing" target="_blank">APAC T3- Escalation</a></li>
                            <li><a href="https://docs.google.com/document/d/1Q0RX51qvpfH6cmrU96q4pfTx14nccMS2jhvItdmL8GY/edit?usp=sharing" target="_blank">Creating PCSUP JIRA (Engineering Escalation)</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/Customer+Engineering+%28CE%29+-Team" target="_blank">Customer Engineering Team (CE)</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/Customer+Success+Team" target="_blank">Customer Success team</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/Weekend-OnCall+Policy" target="_blank">Weekend OnCall Policy</a></li>
                            <li><a href="https://docs.google.com/document/d/1_01vDISK0aPPEdK1_FRKMn03fF5tANoKK3DVSTbF41w/edit" target="_blank">APAC Prisma Cloud TAC SME Process Playbook</a></li>
                            <li><a href="https://confluence-dc.paloaltonetworks.com/display/prisma/IT+Incident+Escalation+Procedure" target="_blank">IT Incident Escalation Procedure</a></li>
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


  <!-- Footer for Copyright --> 
  <<footer id="footer" class="footer">

    
    
    <div class="container copyright text-center mt-4">
      <p>* -<span>Playbooks/Runbooks/Technotes from TAC</span></p>
      <div class="credits">
        
      </div>
    </div>

  </footer>

  
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  
  <!-- PHP Script for Nav bar -->

  <div id="preloader"></div>
          <?php include("script.php"); ?>
          <script>
            const queryString = window.location.search;
            console.log(queryString);
            const urlParams = new URLSearchParams(queryString);
            const cat = urlParams.get('cat');
            console.log(cat);
            if(cat){
                $(".tab-pane").removeClass("show");
                $(".tab-pane").removeClass("active");
                $(".nav-link").removeClass("active");
                
                    $("#nav-"+cat).addClass("show");
                    $("#nav-"+cat).addClass("active");
                    $("#nav-"+cat+"-tab").addClass("active");    
                
            }
          </script>
</body>

</html>