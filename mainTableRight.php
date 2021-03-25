
<table class="w3-table-all">
    <tr>    
        <th></th>
        <th>Include in HC?</th>
        <th>Config Days</th>
        <th># Installed</th>
        <th># to Install</th>
        
    </tr>
    <tr>
        <td><strong>APE(s)</strong></td>
        <td><input type="checkbox" name="chkIncludeAPEs"></td>
        <td><input type="number" name="APEDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="numAPEsInstalled" step="1" min="0" max="100"></td>
        <td><input type="number" name="numAPEsToInstall" step="1" min="0" max="100"></td>
    </tr>
    <tr>
        <td><strong>AWS(s)</strong></td>
        <td><input type="checkbox" name="chkIncludeAWSs"></td>
        <td><input type="number" name="AWSDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="numAWSsInstalled" step="1" min="0" max="100"></td>
        <td><input type="number" name="numAWSsToInstall" step="1" min="0" max="100"></td>
    </tr>
    <tr>
        <td><strong>HA</strong></td>
        <td><input type="checkbox" name="chkIncludeHA"></td>
        <td><input type="number" name="HADays" step="0.5" min="0" max="100"></td>
        
        <td><input type="number" name="numHAInstalled" step="1" min="0" max="100"></td>
        <td><input type="number" name="numHAToInstall" step="1" min="0" max="100"></td>
        
    </tr>
</table>
<br>
<table class="w3-table-all">
    <tr>
        <th></th>
        <th>Config Days</th>
        <th>Currently Installed?</th>
    <tr>
        <td><strong>NTM</strong></td>
        <!--
            <td><input type="checkbox" name="chkIncludeNTM"></td>
            -->
        <td><input type="number" name="NTMDays" step="0.5" min="0" max="100"></td>
        <td><input type="checkbox" name="chkNTMInstalled"></td>
    </tr>
    <tr>
        <td><strong>Kiwi</strong></td>

        <td><input type="number" name="KiwiDays" step="0.5" min="0" max="100"></td>
        <td><input type="checkbox" name="chkKiwiInstalled"></td>
    </tr>
    <tr>
        <td><strong>Dameware</strong></td>

        <td><input type="number" name="DWDays" step="0.5" min="0" max="100"></td>
        <td><input type="checkbox" name="chkDWInstalled"></td>
    </tr>
    <tr>
        <td><strong>Serv-U</strong></td>

        <td><input type="number" name="ServUDays" step="0.5" min="0" max="100"></td>
        <td><input type="checkbox" name="chkServUInstalled"></td>
        
    </tr>
    <tr>
        <td><strong>EOC</strong></td>

        <td><input type="number" name="EOCDays" step="0.5" min="0" max="100"></td>
        <td><input type="checkbox" name="chkEOCInstalled"></td>
        
    </tr>
    <tr>
        <td><strong>AppOptics APM</strong></td>

        <td><input type="number" name="APMDays" step="0.5" min="0" max="100"></td>
        <td><input type="checkbox" name="chkAPMInstalled"></td>
    </tr>
</table>
