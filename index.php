<html>
    <head>
        <!--<link href="index.css" rel="stylesheet">-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<body>

<h3 class="w3-center">Agenda Generator</h3>
    <form action="result.php" method="post" class="w3-container w3-center">
        <table class="w3-table" >    
            <tr>
                <td colspan="4" class=w3-center><label for="EngagementType">Engagement Type</label>
                    <select name="EngagementType">
                    <option value="None">Choose a type...</option>
                    <option value="SpecsOnly">Server Specs Only</option>
                    <option value="HC">Health Check</option>
                    <option value="Rebuild">Rebuild</option>
                    <option value="NewBuild">New Build</option>
                    <option value="EngineMigration">Migration and Upgrade - Engines Only</option>
                    <option value="DBMigration">Migration and Upgrade - DB and Engines</option>
                    <option value="Training">Training Only</option>
                    <option value="MSE">MSE SOW</option>
                    <!--<option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>-->
                    </select>
                </td>
            </tr>
            <tr>
                <td>Non-HC "Day 1 Bits" <input type="number" name="Day1Bits" step="0.5" min="0" max="100"></td>
                <td>HC Assessment <input type="number" name="HCAssessmentDays" step="0.5" min="0" max="100"></td>
                <td>HC Review/Plan <input type="number" name="HCReviewDays" step="0.5" min="0" max="100"></td>
                <td>HC Remediation <input type="number" name="HCRemediationDays" step="0.5" min="0" max="100"></td>
            </tr>


        <tr>
            <td>Include MSE Blurb <input type="checkbox" name="includeMSEBlurb"></td>
            <td>As-Built Documentation <input type="number" name="AsBuiltDays" step="0.5" min="0" max="100"></td>
            <td>Runbook Documentation <input type="number" name="RunbookDays" step="0.5" min="0" max="100"></td>
            <td>Admin/KT <input type="number" name="AdminKTDays" step="0.5" min="0" max="100"></td>
            <td>API Training <input type="number" name="APITrainDays" step="0.5" min="0" max="100"></td>
        </tr>
        </table>
    <br />
    <div class="w3-col" style="width:60%">
    <?php
    include 'mainTableLeft.php';
    ?>
    </div>
    <div class="w3-col w3-right" style="width:38%">
    <?php
    include 'mainTableRight.php';
    ?>
    <br>
        <input class="center" type="submit">
         <input class="center" type="reset">
    </div>

    </form>
</body>
</html>