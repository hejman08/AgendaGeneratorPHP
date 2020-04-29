
<table class="w3-table-all">
    <tr>    
        <th></th>
        <th>Include in HC?</th>
        <th>Config Days</th>
        <th>Training Days</th>
        <th>Size (for Server Specs)</th>
    </tr>
    <tr>
        <td><strong>NPM</strong></td>
        <td><input type="checkbox" name="chkIncludeNPM"></td>
        <td><input type="number" name="NPMDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="NPMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="NPMSize">
                <option value="None"></option>
                <option value="SL100">SL100</option>
                <option value="SL250">SL250</option>
                <option value="SL500">SL500</option>
                <option value="SL2000">SL2000</option>
                <option value="SLX">SLX</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><strong>NTA</strong></td>
        <td><input type="checkbox" name="chkIncludeNTA"></td>
        <td><input type="number" name="NTADays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="NTATrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="NTASize">
                <option value="None"></option>
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><strong>NCM</strong></td>
        <td><input type="checkbox" name="chkIncludeNCM"></td>
        <td><input type="number" name="NCMDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="NCMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="NCMSize">
                <option value="None"></option>
                <option value="DL50">DL50</option>
                <option value="DL100">DL100</option>
                <option value="DL200">DL200</option>
                <option value="DL500">DL500</option>
                <option value="DL1000">DL1000</option>
                <option value="DL3000">DL3000</option>
                <option value="DLX">DLX</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><strong>SAM</strong></td>
        <td><input type="checkbox" name="chkIncludeSAM"></td>
        <td><input type="number" name="SAMDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="SAMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="SAMSize">
                <option value="None"></option>
                <option value="AL150">AL150</option>
                <option value="AL300">AL300</option>
                <option value="AL700">AL700</option>
                <option value="AL1100">AL1100</option>
                <option value="AL1500">AL1500</option>
                <option value="AL2500">AL2500</option>
                <option value="ALX">ALX</option>
                <option value="SAM10">SAM10</option>
                <option value="SAM25">SAM25</option>
                <option value="SAM50">SAM50</option>
                <option value="SAM75">SAM75</option>
                <option value="SAM100">SAM100</option>
                <option value="SAM200">SAM200</option>
                <option value="SAM300">SAM300</option>
                <option value="SAM400">SAM400+</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><strong>IPAM</strong></td>
        <td><input type="checkbox" name="chkIncludeIPAM"></td>
        <td><input type="number" name="IPAMDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="IPAMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="IPAMSize">
                <option value="None"></option>
                <option value="IP1000">IP1000</option>
                <option value="IP4000">IP4000</option>
                <option value="IP16000">IP16000</option>
                <option value="IPX">IPX</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><strong>UDT</strong></td>
        <td><input type="checkbox" name="chkIncludeUDT"></td>
        <td><input type="number" name="UDTDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="UDTTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="UDTSize">
                <option value="None"></option>
                <option value="UT2500">UT2500</option>
                <option value="UT5000">UT5000</option>
                <option value="UT10000">UT10000</option>
                <option value="UT25000">UT25000</option>
                <option value="UT50000">UT50000</option>
                <option value="UTX">UTX</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><strong>VNQM</strong></td>
        <td><input type="checkbox" name="chkIncludeVNQM"></td>
        <td><input type="number" name="VNQMDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="VNQMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="VNQMSize">
                <option value="None"></option>
                <option value="SLA5">SLA5</option>
                <option value="SLA25">SLA25</option>
                <option value="SLA50">SLA50</option>
                <option value="SLAX">SLAX</option>

            </select>
        </td>
    </tr>
    <tr>
        <td><strong>WPM</strong></td>
        <td><input type="checkbox" name="chkIncludeWPM"></td>
        <td><input type="number" name="WPMDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="WPMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="WPMSize">
                <option value="None"></option>
                <option value="WPM5">WPM5</option>
                <option value="WPM10">WPM10</option>
                <option value="WPM20">WPM20</option>
                <option value="WPM50">WPM50</option>
                <option value="WPM100">WPM100</option>
                <option value="WPM200">WPM200</option>
                <option value="WPX">WPX</option>
            </select>
        </td>
    </tr> 
    <tr>
        <td><strong>VMAN</strong></td>
        <td><input type="checkbox" name="chkIncludeVMAN"></td>
        <td><input type="number" name="VMANDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="VMANTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="VMANSize">
                <option value="None"></option>
                <option value="VM8">VM8</option>
                <option value="VM16">VM16</option>
                <option value="VM32">VM32</option>
                <option value="VM64">VM64</option>
                <option value="VM112">VM112</option>
                <option value="VM192">VM192</option>
                <option value="VM320">VM320</option>
                <option value="VM480">VM480</option>
                <option value="VM640">VM640</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><strong>SRM</strong></td>
        <td><input type="checkbox" name="chkIncludeSRM"></td>
        <td><input type="number" name="SRMDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="SRMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="SRMSize">
                <option value="None"></option>
                <option value="SRM25">SRM25</option>
                <option value="SRM50">SRM50</option>
                <option value="SRM150">SRM150</option>
                <option value="SRM300">SRM300</option>
                <option value="SRM500">SRM500</option>
                <option value="SRM1000">SRM1000</option>
                <option value="SRM1500">SRM1500</option>
                <option value="SRM2000">SRM2000</option>
                <option value="SRM3000">SRM3000</option>

            </select>
            <input type="checkbox" name="chkSRMProfiler"> SRM is Profiler
        </td>
    </tr>    
    <tr>
        <td><strong>LA</strong></td>
        <td><input type="checkbox" name="chkIncludeLA"></td>
        <td><input type="number" name="LADays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="LATrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="LASize">
                <option value="None"></option>
                <option value="LA10">LA10</option>
                <option value="LA25">LA25</option>
                <option value="LA50">LA50</option>
                <option value="LA100">LA100</option>
                <option value="LA250">LA250</option>
                <option value="LA500">LA500</option>
                <option value="LA1000">LA1000</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><strong>SCM</strong></td>
        <td><input type="checkbox" name="chkIncludeSCM"></td>
        <td><input type="number" name="SCMDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="SCMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="SCMSize">
                <option value="None"></option>
                <option value="SCM10">SCM10</option>
                <option value="SCM25">SCM25</option>
                <option value="SCM50">SCM50</option>
                <option value="SCM100">SCM100</option>
                <option value="SCM250">SCM250</option>
                <option value="SCM500">SCM500</option>
                <option value="SCM1000">SCM1000</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><strong>SEM</strong></td>
        <td><input type="checkbox" name="chkIncludeSEM"></td>
        <td><input type="number" name="SEMDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="SEMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="SEMSize">
                <option value="None"># of Events/Day</option>
                <option value="5M">5M</option>
                <option value="20M">20M</option>
                <option value="35M">35M</option>
                <option value="50M">50M</option>
                <option value="75M">75M</option>
                <option value="100M">100M</option>
                <option value="130M">130M</option>
                <option value="170M">170M</option>
                <option value="215M">215M</option>

            </select>
        </td>
    </tr>
    <tr>
        <td><strong>DPA</strong></td>
        <td><input type="checkbox" name="chkIncludeDPA"></td>
        <td><input type="number" name="DPADays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="DPATrainDays" step="0.5" min="0" max="100"></td>
        <td>
        <input type="number" name="WHDSize" step="1" min="0" max="500"> Instances
        </td>
    </tr>
    <tr>
        <td><strong>WHD</strong></td>
        <td><input type="checkbox" name="chkIncludeWHD"></td>
        <td><input type="number" name="WHDDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="WHDTrainDays" step="0.5" min="0" max="100"></td>
        <td>
        <input type="number" name="WHDSize" step="1" min="0" max="500"> Seats
        </td>
    </tr>
    <tr>
        <td><strong>PM</strong></td>
        <td><input type="checkbox" name="chkIncludePM"></td>
        <td><input type="number" name="PM" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="PMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="PMSize">
                <option value="None"></option>
                <option value="No">No</option>
                <option value="Yes">Yes</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><strong>ARM</strong></td>
        <td><input type="checkbox" name="chkIncludeARM"></td>
        <td><input type="number" name="ARMDays" step="0.5" min="0" max="100"></td>
        <td><input type="number" name="ARMTrainDays" step="0.5" min="0" max="100"></td>
        <td>
            <select id="ARMSize">
                <option value="None"></option>
                <option value="1000">1000</option>
                <option value="4000">4000</option>
                <option value="10000">10000+</option>
            </select> Users
        </td>
    </tr>
</table>
