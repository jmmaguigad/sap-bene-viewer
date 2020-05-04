<?php
/**
 *
 * @link              https://fo2.dswd.gov.ph/
 * @since             1.0.0
 * @package           Sap_Beneficiary_Viewer
 */
echo '<table style="border-collpse:collapse;border:0;width:100%;">
			<tr>
				<td style="border:0;width:33%;">Province: 
					<select id="province" name="province">
						<option value="">--Select Province--</option>
						<option value="BATANES">BATANES</option>
						<option value="CAGAYAN">CAGAYAN</option>
						<option value="ISABELA">ISABELA</option>
						<option value="NUEVA VIZCAYA">NUEVA VIZCAYA</option>
						<option value="QUIRINO">QUIRINO</option>
					</select>
				</td>
				<td style="border:0;width:33%;">Municipality: 
					<div class="load_municipality"></div>
					<select id="dummy_municipality" name="dummy_municipality" disabled="true">
						<option value="">--Select Municipality--</option>
					</select>					
				</td>
				<td style="border:0;width:33%;">Barangay: 
					<div class="load_barangay"></div>
					<select id="dummy_barangay" name="dummy_barangay" disabled="true">
						<option value="">--Select Barangay--</option>
					</select>					
				</td>
				<td style="border:0;"> 
					<input id="searchresult" type="submit" value="Search"/>
				</td>				
			</tr>
		</table>';
echo '<div class="result"></div>';
	// print sql query
	// echo $wpdb->last_query;
