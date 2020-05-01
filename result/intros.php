<?php
function introPara() 
{
    $return = null;
            $EngType = $GLOBALS['EngagementType'];
            $isOrionEng = $GLOBALS['isOrionEng'];
            $isAPMEng = $GLOBALS['isAPMEng'];
            switch ($EngType) {

            case "SpecsOnly":
                $GLOBALS['NeedsSpecs'] = true;
            break;
            case "Rebuild":
                $return .= "<p>The primary objective of this engagement is to rebuild the client’s SolarWinds environment on new servers. This process will include the implementation of best practices configuration for all products included in the SolarWinds Software List, hands - on training, and knowledge transfer for the client’s SolarWinds administrators.</p>\n";

                $return .= "<p>The rebuild process will include the preservation of monitored elements and custom configurations from the client’s existing SolarWinds deployment. Historical statistic data will not be preserved.</p>\n";
                if ($isOrionEng = true)
                {
                    $return .= "<p>The client is responsible for providing – fully patched (OS & MS SQL) application server(s) and database server for the deployment. In addition, the client must have access to their SolarWinds Customer Portal for the purpose of obtaining license activation keys and downloading the SolarWinds product binaries. Downloading the product binaries prior to the start of the engagement will save valuable consultation time and is strongly encouraged.</p>\n";
                    $GLOBALS['NeedsSpecs'] = true;
                }
                if ($isAPMEng == true)
                {
                    //not sure if we need anything here, placeholder.
                }

                $return .= "<p>Loop1 Systems encourages client participation whenever possible during the configuration of the environment as it will provide valuable hands - on experience to the client’s SolarWinds administrators.</p>\n";


                $return .= "<p>The final product delivered will be a highly functional enterprise level monitoring solution providing both a view into the performance and status of your environment in addition to a proactive system of monitoring, alerting, and reporting to keep users informed of any potential and current problems.</p>\n";
            
                break;
            case "NewBuild":
                $return .= "<p>The primary objective of this engagement is to build the client’s SolarWinds environment. This process will include the implementation of best practices configuration for all products included in the SolarWinds Software list, hands - on training, and knowledge transfer for the client’s SolarWinds administrators.</p>\n";
                if ($isOrionEng == true)
                {
                    $return .= "<p>The client is responsible for providing – fully patched (OS & MS SQL) application server(s) and database server for the deployment. In addition, the client must have access to their SolarWinds Customer Portal for the purpose of obtaining license activation keys and downloading the SolarWinds product binaries. Downloading the product binaries prior to the start of the engagement will save valuable consultation time and is strongly encouraged.</p>\n";
                    $GLOBALS['NeedsSpecs'] = true;
                }
                if ($isAPMEng == true)
                {
                    //not sure if we need anything here, placeholder.
                }

                $return .= "<p>Loop1 Systems encourages client participation whenever possible during the configuration of the environment as it will provide valuable hands - on experience to the client’s SolarWinds administrators.</p>\n";


                $return .= "<p>The final product delivered will be a highly functional enterprise level monitoring solution providing both a view into the performance and status of your environment in addition to a proactive system of monitoring, alerting, and reporting to keep users informed of any potential and current problems.</p>\n";
                $GLOBALS['NeedsSpecs'] = true;
                break;
            case "DBMigration":
                $return .= "<p>The primary objectives of this engagement are to migrate and upgrade the client’s SolarWinds environment. This process will include hands-on training and knowledge transfer for the client’s SolarWinds administrators.</p>\n";

                $return .= "<p>The client is responsible for providing – fully patched (OS & MS SQL) application servers and database server for the deployment. In addition, the client <b class=\"impact\">must have access</b> to their SolarWinds Customer Portal for obtaining license activation keys and downloading the SolarWinds product binaries. Downloading the product binaries prior to the start of the engagement will save valuable consultation time and is <b class=\"impact\">strongly encouraged.</b></p>\n";


                $return .= "<p><b class=\"impact\">Note:</b> If the client wishes to re-use the same IP addresses in the new environment, there<b class=\"impact\"> will be</b> an outage for the SolarWinds environment while the new servers are given the old IP addresses. During this time, the SolarWinds web console will be inaccessible to users. The length of this outage is primarily determined by the size of the database during the Configuration Wizard portion of the migration. Typical down time is approximately 30 minutes to an hour.</p>\n";

                $return .= "<p>Loop1 Systems encourages client participation whenever possible during the configuration of the environment as it will provide valuable hands-on experience to the client’s SolarWinds administrators.</p>\n";
                $DBMigration = true;
                $GLOBALS['NeedsSpecs'] = true;
                break;
            case "EngineMigration":
                $return .= "<p>The primary objectives of this engagement are to migrate and upgrade the client’s SolarWinds environment. This process will include hands-on training and knowledge transfer for the client’s SolarWinds administrators.</p>\n";

                $return .= "<p>The client is responsible for providing – fully patched application server(s) for the deployment. In addition, the client <b class=\"impact\">must have access</b> to their SolarWinds Customer Portal for obtaining license activation keys and downloading the SolarWinds product binaries. Downloading the product binaries prior to the start of the engagement will save valuable consultation time and is <b class=\"impact\">strongly encouraged.</b></p>\n";


                $return .= "<p><b class=\"impact\">Note:</b> If the client wishes to re-use the same IP addresses in the new environment, there<b class=\"impact\"> will be</b> an outage for the SolarWinds environment while the new servers are given the old IP addresses. During this time, the SolarWinds web console will be inaccessible to users. The length of this outage is primarily determined by the size of the database during the Configuration Wizard portion of the migration. Typical down time is approximately 30 minutes to an hour.</p>\n";

                $return .= "<p>Loop1 Systems encourages client participation whenever possible during the configuration of the environment as it will provide valuable hands-on experience to the client’s SolarWinds administrators.</p>\n";
                $DBMigration = false;
                $GLOBALS['NeedsSpecs'] = true;
                break;
            case "HC":
                $return .= "<p>The primary objective of this engagement is to perform a comprehensive Health Check of the client’s environment.</p>\n";
                $GLOBALS['NeedsSpecs'] = 0;
                
                break;
            // case "Existing Environment Remediation":
            //     $return .= "<p>The primary objectives of this engagement are to analyze and perform remediation where necessary in the current SolarWinds environment, implement best practices configuration for all products included in the SolarWinds Software List, and provide hands-on training for the client’s SolarWinds administrators.</p>\n";

            //     $return .= "<p>It is strongly recommended that the client upgrade their SolarWinds environment to the latest stable release for each product.  Loop1 Systems can perform the upgrades at the client’s request, but it will take away from valuable configuration time.</p>\n";

            //     $return .= "<p>Loop1 Systems encourages client participation whenever possible during the configuration of the environment as it will provide valuable hands-on experience to the SolarWinds administrators. The final product delivered will be a highly functional enterprise level monitoring solution providing both a view into the performance and status of your environment as well as a proactive system of monitoring, alerting, and reporting to keep users informed of any potential and current problems.</p>\n";
            //     break;
            // case "Existing Environment Adding Modules":
            //     $return .= "The primary objectives of this engagement are to add new modules to the client’s existing SolarWinds deployment, implement best practices configuration for all products included in the SolarWinds Software List, and provide hands-on training for the client’s SolarWinds administrators.</p>\n";

            //     $return .= "<p>The client is responsible for ensuring that the SolarWinds servers, including both existing and net new servers, are fully patched and meet the minimum requirements for the new modules in addition to the existing ones. In addition, the client must have access to their SolarWinds Customer Portal for the purpose of obtaining license activation keys and downloading the SolarWinds product binaries. Downloading the product binaries prior to the start of the engagement will save valuable consultation time and is <b class=\"impact\">strongly encouraged.</b></p>\n";

            //     $return .= "<p>Loop1 Systems encourages client participation whenever possible during the configuration of the environment as it will provide valuable hands-on experience to the SolarWinds administrators. The final product delivered will be a highly functional enterprise level monitoring solution providing both a view into the performance and status of your environment as well as a proactive system of monitoring, alerting, and reporting to keep users informed of any potential and current problems.</p>\n";
            //     break;
            case "Training":
                $return .= "<p>The primary objective of this engagement is to provide custom hands-on training for the client’s SolarWinds administrators. The client is responsible for upgrading their SolarWinds products to the latest stable release prior to the engagement.</p>\n";
                break;
            // case "WHD On-Prem to Hosted":
            //     $return .= "<p>The primary objective of this engagement is to rebuild the client’s Web Help Desk (WHD) on-premise environment into Loop1 Systems’ Hosted WHD environment. The rebuild process will include the preservation of custom configurations from the client’s existing WHD deployment.</p>\n";
            //     $return .= "<p>Historical ticket data may be migrated, but attachments to tickets may <b class=\"impact\">not</b> be preserved.</p>\n";
            //     $return .= "<p>Loop1 Systems encourages client participation whenever possible during the configuration of the environment as it will provide valuable hands-on experience to the client’s SolarWinds administrators.</p>\n";
            //     break;
            // case "OS/SQL Upgrades":
            //     $return .= "<p>The primary objectives of this engagement are to upgrade the client’s SolarWinds environment, including operating systems of relevant servers and the back-end SQL database instance.</p>\n";

            //     $return .= "<p>The client is responsible for providing <b class=\"impact\">installation binaries and licensing</b> for Windows Server 2016 and SQL Server 2016 SP1 or newer for use during these installations. In addition, the client <b class=\"impact\">must have access </b>to their SolarWinds Customer Portal for obtaining license activation keys and downloading the SolarWinds product binaries.</p>\n";

            //     $return .= "<p>Downloading the product binaries prior to the start of the engagement will save valuable consultation time and is <b class=\"impact\">strongly encouraged.</b></p>\n";

            //     $return .= "<p><b class=\"impact\">Note: </b>There <b class=\"impact\">will be</b> an outage for the SolarWinds environment while the servers, database, and Orion instance are being upgraded. During this time, the SolarWinds web console will be inaccessible to users.</p>\n";


            //     $return .= "<p>Loop1 Systems encourages client participation whenever possible during the configuration of the environment as it will provide valuable hands-on experience to the client’s SolarWinds administrators.</p>\n";
            //     break;
            case "MSE":
                $return .= "<p>The client is contracting Loop1 Systems for Managed Services and has requested a statement of goals and objectives (a “statement of work”) as laid out in this document. The hours are to be used on an ad-hoc basis, but for guidance purposes, some of the goals around the client’s SolarWinds environment are laid out in this document.</p>\n";
                break;
            default: 
               // $GLOBALS['ErrorMsg'] .= "No Engagement Type selected";
                break;
        }
        return $return;
}
?>
