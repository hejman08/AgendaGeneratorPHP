<?php
function serverSpecs() {
    
//figure out what size category each module falls into
global $NPMSize, $NCMSize, $NTASize, $SAMSize, $SCMSize, $IPAMSize, $UDTSize, $VNQMSize, $WPMSize, $LASize, $SEMSize, $DPASize, $WHDSize, $PMSize, $ARMSize, $SRMSize, $VMANSize;
global $numAPEs, $numAWSss, $hasHA, $hasKiwi, $hasDW, $hasEOC, $hasAPM, $numDPA, $numWHD;
global $numAWSs, $hasDPA, $hasPM, $hasSEM, $hasNTA, $hasLA, $hasARM;
global $isOrionEng;
$ModuleCount = 12; //start with max # of modules and remove from each blank sized module in Orion

    //Weight Orion modules based on size selected
    switch ($NPMSize)
    {
        case "SL100":
        case "SL250":
        case "SL500":
            $NPMWeight = 1;
            break;
        case "SL2000":
            $NPMWeight = 2;
            break;
        case "SLX":
            $NPMWeight = 3;
            break;
        default:
            $NPMWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($NCMSize)
    {
        case "DL50":
        case "DL100":
        case "DL200":
            $NCMWeight = 1;
            break;
        case "DL500":
        case "DL1000":
            $NCMWeight = 2;
            break;
        case "DL3000":
        case "DLX":
            $NCMWeight = 3;
            break;
        default:
            $NCMWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($NTASize)
    {
        case "No":
            $NTAWeight = 0;
            break;
        case "Yes":
            $NTAWeight = 2;
            break;
        default:
            $NTAWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($SAMSize)
    {
        case "AL150":
        case "AL300":
        case "SAM10":
        case "SAM25":
            $SAMWeight = 1;
            break;
        case "AL700":
        case "AL1100":
        case "AL1500":
        case "AL2500":
        case "SAM50":
        case "SAM75":
        case "SAM100":
        case "SAM200":
            $SAMWeight = 2;
            break;
        case "ALX":
        case "SAM300":
            $SAMWeight = 3;
            break;
        case "SAM400+":
            $SAMWeight = 4;
            break;
        default:
            $SAMWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($IPAMSize)
    {
        case "IP1000":
        case "IP4000":
            $IPAMWeight = 1;
            break;
        case "IP16000":
            $IPAMWeight = 2;
            break;
        case "IPX":
            $IPAMWeight = 3;
            break;
        default:
            $IPAMWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($UDTSize)
    {
        case "UT2500":
        case "UT5000":
            $UDTWeight = 1;
            break;
        case "UT10000":
        case "UT25000":
            $UDTWeight = 2;
            break;
        case "UT50000":
        case "UTX":
            $UDTWeight = 3;
            break;
        default:
            $UDTWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($VNQMSize)
    {
        case "SLA 5":
        case "SLA 25":
            $VNQMWeight = 1;
            break;
        case "SLA 50":
            $VNQMWeight = 2;
            break;
        case "SLA X":
            $VNQMWeight = 3;
            break;
        default:
            $VNQMWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($WPMSize)
    {
        case "WPM5":
        case "WPM10":
        case "WPM20":
            $WPMWeight = 1;
            break;
        case "WPM50":
        case "WPM100":
        case "WPM200":
            $WPMWeight = 2;
            break;
        case "WPX":
            $WPMWeight = 3;
            break;
        default:
            $WPMWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($SCMSize)
    {
        case "SCM10":
        case "SCM25":
            $SCMWeight = 1;
            break;
        case "SCM50":
        case "SCM100":
        case "SCM250":
        case "SCM500":
        case "SCM1000":
            $SCMWeight = 2;
            break;
        default:
            $SCMWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($SRMSize)
    {
        case "SRM25":
        case "SRM50":
        case "SRM150":
        case "SRM300":
        case "SRM500":
        case "SRM1000":
            $SRMWeight = 2;
            break;
        case "SRM1500":
        case "SRM3000":
        case "SRM5000":
            $SRMWeight = 3;
            break;
        default:
            $SRMWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($VMANSize)
    {
        case "VMS8":
        case "VMS16":
        case "VMS32":
        case "VMS64":
            $VMANWeight = 1;
            break;
        case "VMS112":
        case "VMS192":
        case "VMS320":
            $VMANWeight = 2;
            break;
        case "VMS480":
        case "VMS640":
            $VMANWeight = 3;
            break;
        default:
            $VMANWeight = 0;
            $ModuleCount += -1;
            break;
    }
    switch ($LASize)
    {
        case "LA10":
        case "LA25":
        case "LA50":
        case "LA100":
        case "LA200":
            $LAWeight = 2;
            break;
        case "LA500":
        case "LA1000":
            $LAWeight = 3;
            break;
        default:
            $LAWeight = 0;
            $ModuleCount += -1;
            break;
    }

    //figure out which Module (or APEs and such) has the highest weight and build the specs accordingly. Also take # of modules into account
    if ($numAPEs >= 4)
    {
        $APEWeight = 4;
    }
    else if ($numAPEs > 0)
    {
        $APEWeight = 3;
    }
    else
    {
        $APEWeight = 0;
    }

    $ModuleWeights = array($NPMWeight, $NCMWeight, $NTAWeight, $IPAMWeight, $UDTWeight, $SAMWeight, $SCMWeight, $WPMWeight, $SRMWeight, $VMANWeight, $LAWeight, $VNQMWeight, $APEWeight);
    $EnvSizeCategory = max($ModuleWeights);

    $AppServerCoresMin = (4 + ($ModuleCount -1));
            $AppServerCoresRec = (8 + (($ModuleCount - 1) * 2));
            $AppServerRAMMin = (8 + (($ModuleCount - 1) * 2));
            $AppServerRAMRec = (16 + (($ModuleCount - 1) * 2));
            //actually build the specs for the Orion Core servers and DB's
            $ReturnStr = "<h1>Server Recommendations</h1>\n";
            $ReturnStr .= "<H2>Disclaimer</h2>\n";
            $ReturnStr .= "<p>These are <b class='impact'>base recommendations</b> for your SolarWinds platform. Resources may need to be increased over time depending on the actual workload placed on the environment. Please note that these recommendations are also based on the average of many environments of the prescribed size, and therefore it is also possible that the client’s environment may require less resources in some cases as well. It is advised to start with the below recommended amounts of resources, monitor the usage across all servers over time, and add or remove resources as needed to maintain reasonable usage without over/under-provisioning.</p>\n";
            $ReturnStr .= "<p>Specifications below are written under the assumption the deployment will be on-premise. Loop1 recommends virtual servers for all deployments where possible. For deployments in Amazon Web Services or Microsoft Azure, <a href='https://documentation.solarwinds.com/en/Success_Center/orionplatform/Content/Core-Multi-Module-System-Guidelines.htm'>please see this link.</a></p>";
            if ($isOrionEng == true)
            {
                //build Orion App server regardless of type (as long as it's an Orion deployment at all)

                $ReturnStr .= "<h2>Orion Core Application Server";
                if ($hasHA == true) {
                    $ReturnStr .= " - Qty: 1 (+1 for HA)";
                }
                $ReturnStr .="</h2>\n";
                $CoreAppSpecs = "<ul>";
                $CoreAppSpecs .= "<li>OS - Server 2016 or 2019</li>\n";
                $CoreAppSpecs .= "<li>CPU</li><ul>\n";
                $CoreAppSpecs .= "<li>Minimum: " . $AppServerCoresMin . " Cores </li>\n";
                $CoreAppSpecs .= "<li>Recommended: " . $AppServerCoresRec . " Cores </li></ul>\n";
                $CoreAppSpecs .= "<li>RAM</li><ul>\n";
                $CoreAppSpecs .= "<li>Minimum: " . $AppServerRAMMin . "GB </li>\n";
                $CoreAppSpecs .= "<li>Recommended: " . $AppServerRAMRec . "GB </li></ul>\n";
                $CoreAppSpecs .= "<li>.Net Framework 4.8</li>\n";
                $CoreAppSpecs .= "<li>Drives:</li><ul>\n";
                $CoreAppSpecs .= "<li>80GB Standard OS Drive (C:)</li>\n";
                $CoreAppSpecs .= "<li>150GB Application Data Drive (D:)</li>\n</ul>\n</ul>\n";
                $ReturnStr .= $CoreAppSpecs;


            }

            //build APEs if they exist
            if ($numAPEs >= 1)
            {
                

                $ReturnStr .="</h2>\n";
                $ReturnStr .= "<h2>Additional Polling Engine Server - Qty: " . $numAPEs;
                if ($hasHA == true) {
                    $ReturnStr .= " (+$numAPEs for HA)";
                }
                $ReturnStr .= "</h2>\n";
                $ReturnStr .= $CoreAppSpecs; //There should be no way to get here without also having a Core App Server. At least not without an error message.
            }

            //build AWS servers if they exist
            if ($numAWSs >= 1)
            {
                $ReturnStr .= "<h2>Additional Web Server - Qty: " . $numAWSs . "</h2>\n";
                $ReturnStr .= "<ul>";
                $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                $ReturnStr .= "<li>CPU - 4 Cores @2.4GHz or better</li>\n";
                $ReturnStr .= "<li>RAM - 16GB or better (Expandable for growth)</li>\n";
                $ReturnStr .= "<li>.Net Framework 4.8</li>\n";
                $ReturnStr .= "<li>Drives:</li><ul>\n";
                $ReturnStr .= "<li>80GB Standard OS Drive (C:)</li>\n";
                $ReturnStr .= "<li>40GB Application Data Drive (D:)</li>\n</ul>\n</ul>\n";
            }
            switch ($EnvSizeCategory)
            {
                case 1: //"Small" environments - no APEs allowed, no NTA or LA allowed.
                    $ReturnStr .= "<h2>Orion Core MS SQL Server</h2>\n";
                    $ReturnStr .= "<ul>";
                    $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                    $ReturnStr .= "<li>SQL Server 2016 SP1 or newer</li>\n";
                    $ReturnStr .= "<li>CPU - 4 Cores or better (Expandable for growth)</li>\n";
                    $ReturnStr .= "<li>RAM - 16GB or better (Expandable for growth)</li>\n";
                    $ReturnStr .= "<li>Drives:</li><ul>\n";
                    $ReturnStr .= "<li>80GB Standard OS Drive (C:)</li>\n";
                    $ReturnStr .= "<li>60GB MS SQL Application Data & OS Page File (D:)</li>\n";
                    $ReturnStr .= "<li>200GB MS SQL Data File storage (E:) (Expandable for growth)</li>\n";
                    $ReturnStr .= "<li>50GB MS SQL Log file storage (F:)</li>\n";
                    $ReturnStr .= "<li>25GB TempDB storage (G:)(optional)</li>\n";
                    $ReturnStr .= "<li>100GB Local backup storage (H:)</li>\n</ul>\n</ul>\n";

                    break;
                case 2: // "Medium" environments - no APEs allowed
                    $CoreDBCPU = 8; //Start with 8 cores, add 4 each for NTA and LA DB's
                    $CoreDBRAM = 64; //start with 64GB, add 16GB each for NTA and LA DB's
                    $CoreDBMDF = 200; //200GB +50 each for NTA or LA
                    $CoreDBLDF = 50; //200GB +25 each for NTA or LA
                    $CoreDBTempData = 25; //25GB + 25 each for NTA or LA
                    $CoreDBBackup = 100; //100GB +50 each for NTA or LA
                    $ReturnStr .= "<h2>Orion Core MS SQL Server";
                    if ($NTAWeight > 0 & $LAWeight > 0)
                    {
                        $ReturnStr .= " (Includes NTA & LA Databases)";
                        $CoreDBCPU += 8;
                        $CoreDBRAM += 32;
                        $CoreDBMDF += 100;
                        $CoreDBLDF += 50;
                        $CoreDBTempData += 50;
                        $CoreDBBackup += 100;
                    }
                    else if ($LAWeight > 0 & $NTAWeight < 1)
                    {
                        $ReturnStr .= " (Includes LA Database)";
                        $CoreDBCPU += 4;
                        $CoreDBRAM += 16;
                        $CoreDBMDF += 50;
                        $CoreDBLDF += 25;
                        $CoreDBTempData += 25;
                        $CoreDBBackup += 50;
                    }

                    else if ($NTAWeight > 0 & $LAWeight < 1)
                    {
                        $ReturnStr .= " (Includes NTA Database)";
                        $CoreDBCPU += 4;
                        $CoreDBRAM += 16;
                        $CoreDBMDF += 50;
                        $CoreDBLDF += 25;
                        $CoreDBTempData += 25;
                        $CoreDBBackup += 50;
                    }
                    $ReturnStr .= "</h2>\n";
                    $ReturnStr .= "<ul>";
                    $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                    $ReturnStr .= "<li>SQL Server 2016 SP1 or newer</li>\n";
                    $ReturnStr .= "<li>CPU - " . $CoreDBCPU . " Cores or better (Expandable for growth)</li>\n";
                    $ReturnStr .= "<li>RAM - " . $CoreDBRAM . "GB or better (Expandable for growth)</li>\n";
                    $ReturnStr .= "<li>Drives:</li><ul>\n";
                    $ReturnStr .= "<li>80GB Standard OS Drive (C:)</li>\n";
                    $ReturnStr .= "<li>60GB MS SQL Application Data & OS Page File (D:)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBMDF . "GB MS SQL Data File storage (E:) (Expandable for growth)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBLDF . "GB MS SQL Log file storage (F:)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBTempData . "GB TempDB storage (G:) (Optional)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBBackup . "GB Local Backup storage (H:)</li>\n</ul>\n</ul>\n";

                    break;
                case 3: //"Large" environments - 1-4 APEs allowed
                    $CoreDBCPU = 8; //plus 4 for each NTA or LA
                    $CoreDBRAM = 128; //plus 16 each for NTA or LA
                    $CoreDBMDF = 300; //plus 250 each for NTA or LA
                    $CoreDBLDF = 300; //Apparently doesn't change even with NTA and LA based on current info.
                    $CoreDBTempData = 300; //Also apparently doesn't change.
                    $CoreDBTempLog = 300; //Also apparently doesn't change.
                    $ReturnStr .= "<h2>Orion Core MS SQL Server";
                    if ($NTAWeight > 0 & $LAWeight > 0)
                    {
                        $CoreDBCPU += 8;
                        $ReturnStr .= " (Includes NTA & LA Databases)";
                        $CoreDBRAM += 32;

                    }
                    else if ($LAWeight > 0 & $NTAWeight < 1)
                    {
                        $CoreDBCPU += 4;
                        $ReturnStr .= " (Includes LA Database)";
                        $CoreDBRAM += 16;
                    }

                    else if ($NTAWeight > 0 & $LAWeight < 1)
                    {
                        $CoreDBCPU += 4;
                        $ReturnStr .= " (Includes NTA Database)";
                        $CoreDBRAM += 16;
                    }
                    $ReturnStr .= "</h2>\n";
                    $ReturnStr .= "<ul>";
                    $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                    $ReturnStr .= "<li>SQL Server 2016 SP1 or newer</li>\n";
                    $ReturnStr .= "<li>CPU - " . $CoreDBCPU . " Cores or better (Expandable for growth)</li>\n";
                    $ReturnStr .= "<li>RAM - " . $CoreDBRAM . "GB or better (Expandable for growth)</li>\n";
                    $ReturnStr .= "<li>Drives:</li><ul>\n";
                    $ReturnStr .= "<li>80GB Standard OS Drive (C:)</li>\n";
                    $ReturnStr .= "<li>60GB MS SQL Application Data & OS Page File (D:)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBMDF . "GB(Expandable) for MS SQL MDF (E:)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBLDF . "GB(Expandable) for MS SQL LDF (F:)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBTempData . "GB(Expandable) for TempDB Data file (optional)(G:)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBTempLog . "GB(Expandable) for TempDB Log file (optional)(H:)</li></ul></ul>\n";
                    
                    
                    break;

                case 4: //"XLarge" environments
                        //CPU is always 12 cores for the Orion Core. NTA and LA NEVER should be on same DB instance as Core.
                    $CoreDBMDF = 300;
                    $CoreDBLDF = 300;
                    $CoreDBTempData = 300;
                    $CoreDBTempLog = 300;
                    $ReturnStr .= "<h2>Orion Core MS SQL Server</h2>\n";
                    $ReturnStr .= "<ul>";
                    $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                    $ReturnStr .= "<li>SQL Server 2016 SP1 or newer</li>\n";
                    $ReturnStr .= "<li>CPU - 12 Cores or better (Expandable for growth)</li>\n";
                    $ReturnStr .= "<li>RAM</li><ul>\n";
                    $ReturnStr .= "<li>Minimum: 256GB</li>\n";
                    $ReturnStr .= "<li>Recommended: 512GB</li></ul>\n";
                    $ReturnStr .= "<li>Drives:</li><ul>\n";
                    $ReturnStr .= "<li>80GB Standard OS Drive (C:)</li>\n";
                    $ReturnStr .= "<li>60GB MS SQL Application Data & OS Page File (D:)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBMDF . "GB(Expandable) for MS SQL MDF (E:)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBLDF . "GB(Expandable) for MS SQL LDF (F:)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBTempData . "GB(Expandable) for TempDB Data file (optional)(G:)</li>\n";
                    $ReturnStr .= "<li>" . $CoreDBTempLog . "GB(Expandable) for TempDB Log file (optional)(H:)</li></ul></ul>\n";
                    
                    if ($hasNTA == true)
                    {
                        $ReturnStr .= "<h2>NTA Flow Storage MS SQL Server</h2>\n";
                        $ReturnStr .= "<ul>";
                        $ReturnStr .= "<li>OS - Server 2016 or 2019 </li>\n";
                        $ReturnStr .= "<li>SQL Server 2016 SP1 or newer </li>\n";
                        $ReturnStr .= "<li>CPU - 4 Cores or better (Expandable for growth)</li>\n";
                        $ReturnStr .= "<li>RAM</li><ul>\n";
                        $ReturnStr .= "<li>Minimum: 16GB</li>\n";
                        $ReturnStr .= "<li>Recommended: 32GB or larger</li></ul>\n";
                        $ReturnStr .= "<li>Drives:</li><ul>\n";
                        $ReturnStr .= "<li>80GB Standard OS Drive (C:)</li>\n";
                        $ReturnStr .= "<li>60GB MS SQL Application Data & OS Page File (D:)</li>\n";
                        $ReturnStr .= "<li>100GB - 1TB NetFlow storage capacity on local NTFS disk</li><ul>\n";
                        $ReturnStr .= "<ul><li>Requires approximately 8GB of storage for every 1000 flows retained for 30 days.</li></ul></ul></ul></ul>\n";

                    }
                    if ($hasLA == true)
                    {
                        $ReturnStr .= "<h2>LA Syslog/Trap Storage MS SQL Server</h2>\n";
                        $ReturnStr .= "<ul>";
                        $ReturnStr .= "<li>OS - Server 2016 or 2019 </li>\n";
                        $ReturnStr .= "<li>SQL Server 2016 SP1 or newer </li>\n";
                        $ReturnStr .= "<li>CPU - 4 Cores or better (Expandable for growth)</li>\n";
                        $ReturnStr .= "<li>RAM</li><ul>\n";
                        $ReturnStr .= "<li>Minimum: 16GB</li>\n";
                        $ReturnStr .= "<li>Recommended: 32GB or larger</li></ul>\n";
                        $ReturnStr .= "<li>Drives:</li><ul>\n";
                        $ReturnStr .= "<li>80GB Standard OS Drive (C:)</li>\n";
                        $ReturnStr .= "<li>60GB MS SQL Application Data & OS Page File (D:)</li>\n";
                        $ReturnStr .= "<li>100GB - 1TB syslog/trap storage capacity on local NTFS disk</li><ul>\n";
                        $ReturnStr .="</ul></ul></ul>\n";

                    }
                    break;
            }
            $ReturnStr .= "<p><b class='impact'>Note:</b> The speed of the data and log drives for the MS SQL back-end is extremely important for a healthy and optimally performing Orion environment. If the database is located on a physical server using local storage, SSD drives or 15KRPM drives in a RAID 10 configuration are strongly recommended.</p>";
            $ReturnStr .= "<p><a href = 'https://support.solarwinds.com/SuccessCenter/s/article/MS-SQL-Server-Replication-in-SolarWinds-Orion-Database'>*If using a MS SQL clustering please see this KB article regarding supported MS SQL replication options</a></p>";


            
            if ($hasEOC == true)
            {
                $ReturnStr .= "<h2>EOC Application Server</h2>\n";
                $ReturnStr .= "<ul>";
                $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                $ReturnStr .= "<li>CPU - 4 Cores @2.4GHz or better</li>\n";
                $ReturnStr .= "<li>RAM - 24GB</li>\n";
                $ReturnStr .= "<li>.Net Framework 4.8</li>\n";
                $ReturnStr .= "<li>Drives:</li><ul>\n";
                $ReturnStr .= "<li>80GB Standard OS Drive (C:)</li>\n";
                $ReturnStr .= "<li>40GB Application Data Drive (D:)</li>\n</ul>\n</ul>\n";
            }
            $DPAUnit = "GB";
            if ($hasDPA == true)
            {
                if ($numDPA < 21)
                {
                    $DPAAppCPU = 2;
                    $DPAAppRAM = 2;
                    $DPARepCPU = 2;
                    $DPARepRAM = 4;
                }
                else if ($numDPA < 51)
                {
                    $DPAAppCPU = 2;
                    $DPAAppRAM = 2;
                    $DPARepCPU = 2;
                    $DPARepRAM = 8;
                }
                else if ($numDPA < 101)
                {
                    $DPAAppCPU = 4;
                    $DPAAppRAM = 4;
                    $DPARepCPU = 4;
                    $DPARepRAM = 8;
                }
                else if ($numDPA <= 250)
                {
                    $DPAAppCPU = 4;
                    $DPAAppRAM = 8;
                    $DPARepCPU = 4;
                    $DPARepRAM = 16;
                }
                // figure out disk space (recommendations are 1, 3, or 5GB for DB's so let's call it 4 assuming most are going to have medium or high traffic DB's
                $DPARepData = $numDPA * 4;
                if ($DPARepData < 24)
                {
                    $DPARepData = 24; //minimum 24GB disk space for the repository apparently.
                }
                if ($DPARepData >= 1000)
                {
                    //we're in the TB range here.
                    $DPARepData = Round(($DPARepData / 1000), 1);
                    $DPAUnit = "TB";
                }
                $ReturnStr .= "<h2>DPA Application Server</h2>\n";
                $ReturnStr .= "<ul>";
                $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                $ReturnStr .= "<li>CPU - " . $DPAAppCPU . " Cores or better (Expandable for growth)</li>\n";
                $ReturnStr .= "<li>RAM - " . $DPAAppRAM . "GB or better (Expandable for growth)</li>\n";
                $ReturnStr .= "<li>Drives:</li><ul>\n";
                $ReturnStr .= "<li>80GB Standard OS Drive, including DPA Application (C:)</li></ul></ul>\n";

                $ReturnStr .= "<h2>DPA Repository Database Server</h2>\n";
                $ReturnStr .= "<ul>";
                $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                $ReturnStr .= "<li>Database – SQL Server 2014 SP2, 2016 SP1, or SQL Server 2017 Standard or Enterprise OR Oracle 11.2 / 12.1 / 12.2 Standard or Enterprise(single tenant & multitenant) </li>";
                $ReturnStr .= "<li>CPU - " . $DPARepCPU . " Cores or better (Expandable for growth)</li>\n";
                $ReturnStr .= "<li>RAM - " . $DPARepRAM . "GB or better (Expandable for growth)</li>\n";
                $ReturnStr .= "<li>Drives:</li><ul>\n";
                $ReturnStr .= "<li>80GB Standard OS Drive, including DB Application (C:)</li>\n";
                $ReturnStr .= "<li>" . $DPARepData . $DPAUnit . " Database storage Drive (Expandable for Growth)</li></ul></ul>\n";
                //note about DPA not on same server needs to be here.
            }
            if ($hasPM == true)
            {
                $ReturnStr .= "<h2>PM Application Server</h2><ul>\n";
                $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                $ReturnStr .= "<li>.Net Framework v3.5 SP1 and 4.5</li>\n";
                $ReturnStr .= "<li>CPU - 2 Cores or better (Expandable for growth)</li>\n";
                $ReturnStr .= "<li>Memory - 8GB (Expandable for growth)</li>\n";
                $ReturnStr .= "<li>Drives:</li><ul>\n";
                $ReturnStr .= "<li>80GB Standard OS Drive, Including PM Application (C:)</li></ul>\n";
                $ReturnStr .= "<li>PM Supports Windows Server Update Services (WSUS) servers running the following versions:</li><ul>\n";
                $ReturnStr .= "<li>WSUS 3.0 SP2 or later with Microsoft KB2734608 applied</li>\n";
                $ReturnStr .= "<li>WSUS 6.0 and 6.2 installed on Windows Server 2012</li>\n";
                $ReturnStr .= "<li>WSUS 6.3 installed on Windows Server 2012R2</li>\n";
                $ReturnStr .= "<li>WSUS 10 installed on Windows Server 2016</li></ul>\n";
                $ReturnStr .= "<li>PM Supports the following versions of Configuration Manager (SCCM):</li><ul>\n";
                $ReturnStr .= "<li>SCCM 2007 SP2 or later</li>\n";
                $ReturnStr .= "<li>SCCM 2012 and 2012R2</li>\n";
                $ReturnStr .= "<li>SCCM 1511</li>\n";
                $ReturnStr .= "<li>SCCM 1606</li>\n";
                $ReturnStr .= "<li>SCCM 1610</li>\n";
                $ReturnStr .= "<li>SCCM 1702</li>\n";
                $ReturnStr .= "<li>SCCM 1706</li>\n";
                $ReturnStr .= "<li>SCCM 1710</li>\n";
                $ReturnStr .= "<li>SCCM 1802</li>\n";
                $ReturnStr .= "<li>SCCM 1806</li></ul></ul>\n";

                $ReturnStr .= "<h2>PM Database Server (may be combined with PM App server in small networks)</h2><ul>\n";
                $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                $ReturnStr .= "<li>SQL Server 2016 SP1 or 2017 – Express, Standard or Enterprise</li>\n";
                $ReturnStr .= "<li>CPU - 2 Cores or better (Expandable for growth)</li>\n";
                $ReturnStr .= "<li>Memory - 12GB (Expandable for growth)</li>\n";
                $ReturnStr .= "<li>Drives:</li><ul>\n";
                $ReturnStr .= "<li>100GB Standard OS Drive, Including SQL Application (C:)</li>\n";
                $ReturnStr .= "<li>20 GB MS SQL Data Drive (Expandable for growth)</li>\n</ul></ul>\n";

            }
            
            if ($hasSEM == true)
            {
                
                switch ($SEMSize)
                {
                    case "5M":
                        $SEMCPU = 2;
                        $SEMRAM = 8;
                        $SEMDisk = "256GB";
                        break;
                    case "20M":

                        $SEMCPU = 4;
                        $SEMRAM = 12;
                        $SEMDisk = "256GB";
                        break;
                    case "35M":
                        $SEMCPU = 4;
                        $SEMRAM = 16;
                        $SEMDisk = "512GB";
                        break;
                    case "50M":
                        $SEMCPU = 8;
                        $SEMRAM = 32;
                        $SEMDisk = "512GB";
                        break;
                    case "75M":
                        $SEMCPU = 10;
                        $SEMRAM = 40;
                        $SEMDisk = "1TB";
                        break;
                    case "100M":
                        $SEMCPU = 10;
                        $SEMRAM = 48;
                        $SEMDisk = "1TB";
                        break;
                    case "130M":
                        $SEMCPU = 12;
                        $SEMRAM = 96;
                        $SEMDisk = "1.5TB";
                        break;
                    case "170M":
                        $SEMCPU = 14;
                        $SEMRAM = 192;
                        $SEMDisk = "1.5TB";
                        break;
                    case "215M":
                        $SEMCPU = 16;
                        $SEMRAM = 256;
                        $SEMDisk = "2TB";
                        break;
                }
                $ReturnStr .= "<H2>SEM Virtual Appliance</h2><ul>\n";
                $ReturnStr .= "<li>Hypervisors Supported: VMware vSphere ESX 5.5 or ESXi 5.5+; Hyper-V 2012, 2012 R2, or 2016</li>\n";
                $ReturnStr .= "<li>CPUs - " . $SEMCPU . " cores or better (Expandable for growth)*</li>\n";
                $ReturnStr .= "<li>RAM - " . $SEMRAM . "GB or better (Expandable for growth)*</li>\n";
                $ReturnStr .= "<li>Storage - " . $SEMDisk . " (Expandable for growth)</li>\n";
                $ReturnStr .= "<li>1 GBE NIC</li>\n";
                $ReturnStr .= "<li>*CPU and Memory resources must be dedicated to the SEM appliance</li></ul>\n";


            }if ($hasARM == true)
            {
                
                switch ($ARMSize)
                {
                    case "1000":
                        $ARMCPU = 2;
                        $ARMRAM = 8;
                        $ARMDisk = "50GB";
                        break;
                    case "4000":

                        $ARMCPU = 4;
                        $ARMRAM = 12;
                        $SEMDisk = "60GB";
                        break;
                    case "10000+":
                        $ARMCPU = 4;
                        $ARMRAM = 16;
                        $SEMDisk = "60GB";
                        break;
                    
                }
                $ReturnStr .= "<H2>ARM Server</h2><ul>\n";
                $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                $ReturnStr .= "<ul><li>Server Core versions are <b class=\"impact\">not </b>supported</li></ul>\n";
                $ReturnStr .= "<li>CPUs - " . $ARMCPU . " cores or better (Expandable for growth)*</li>\n";
                $ReturnStr .= "<ul><li>Intel Itanium platforms are <b class=\"impact\">not </b>supported</li></ul>\n";
                $ReturnStr .= "<li>RAM - " . $ARMRAM . "GB or better (Expandable for growth)*</li>\n";
                $ReturnStr .= "<li>.NET Framework 3.5 SP1 <b class=\"impact\">and </b>4.5.2 (or higher)</li>\n";
                $ReturnStr .= "<li>Web Components/Web Interface require IIS version 7.5 or higher</li>\n";
                $ReturnStr .= "<li>Drives:</li><ul>\n";
                $ReturnStr .= "<li>80GB Standard OS Drive (C:)</li>\n";
                $ReturnStr .= "<li>" . $ARMDisk . " Application Data Drive (D:)</li>\n</ul>\n</ul>\n";
                
                $ReturnStr .= "<h2>ARM SQL Server</h2>\n";
                $ReturnStr .= "<ul>";
                $ReturnStr .= "<li>OS - Server 2016 or 2019</li>\n";
                $ReturnStr .= "<li>SQL Server 2014, 2016, or 2017; Standard, Enterprise, or Express* edition</li>\n";
                $ReturnStr .= "<li>CPU - 2 Cores @2.4GHz or better</li>\n";
                $ReturnStr .= "<li>RAM - 4GB</li>\n";
                $ReturnStr .= "<li>Drives:</li><ul>\n";
                $ReturnStr .= "<li>80GB Standard OS Drive (C:)</li>\n";
                $ReturnStr .= "<li>150GB MS SQL Data storage (E:) (Expandable for growth)</li>\n</ul>\n</ul>\n";
                $ReturnStr .="<p>*Note that SQL Express limits data storage to 10GB and will also impact performance in larger environments due to maximum RAM and CPU limitations. It is not recommended to use SQL express in environments with over 1000 users.</p>\n";
                


            }
            //also build specs for additional servers - DPA (done), PMAN, ARM, WHD, SEM, where appropriate
         

            // Console.WriteLine($ReturnStr);

            return $ReturnStr; //send the HTML chunk for the Server Specs back to the main code
//return "Server specs are coming soon. For now, replace this section with specs from the old Excel calculator";
//return "Size: $EnvSizeCategory";
}

?>