
            table tbody tr td
			{
				padding: 10px;
				border:.1px solid rgba(77,148,255,.3);
			}
			table tbody tr:hover
			{
				transition: all .3s ease-in-out;
				background:#fff;
			}
			.product-table button
			{
				border:.1px solid rgba(77,148,255,.7);
				background:#fff;
				padding:10px;
				height:40px;
				border-radius:3px;
			}
			.product-table button:hover
			{
				transition: all .2s ease-in-out;
				background:#4d94ff;
				border:none;
				color:#fff;
			}
<div id="table">
    <table>
    <h4>Product Details</h4><hr style='width:100%; border:1px solid rgba(77,148,255,.2);margin-top:5px;margin-bottom:15px;'>
        <tbody>
            <tr>
                <td width=300px>Brand</td>
                <td width=900px><?php echo $_GET['brand'];?></td>
            </tr>
            <tr>
                <td width=300px>Model</td>
                <td width=900px><?php echo $_GET['model'];?></td>
            </tr>
            <tr>
                <td width=300px>Processor</td>
                <td width=900px><?php echo $_GET['processor'];?></td>
            </tr>
            <tr>
                <td width=300px>Generation</td>
                <td width=900px><?php echo $_GET['gen'];?></td>
            </tr>
            <tr>
                <td width=300px>Clock speed</td>
                <td width=900px><?php echo $_GET['clock_speed'];?></td>
            </tr>
            <tr>
                <td width=300px>Cache</td>
                <td width=900px><?php echo $_GET['cache'];?></td>
            </tr>
            <tr>
                <td width=300px>Dispaly type</td>
                <td width=900px><?php echo $_GET['d_type'];?></td>
            </tr>
            <tr>
                <td width=300px>Display size</td>
                <td width=900px><?php echo $_GET['d_size'];?></td>
            </tr>
            <tr>
                <td width=300px>Display Resolution</td>
                <td width=900px><?php echo $_GET['d_resolution'];?></td>
            </tr>
            <tr>
                <td width=300px>Touch</td>
                <td width=900px><?php echo $_GET['touch'];?></td>
            </tr>
            <tr>
                <td width=300px>RAM type</td>
                <td width=900px><?php echo $_GET['r_type'];?></td>
            </tr>
            <tr>
                <td width=300px>RAM</td>
                <td width=900px><?php echo $_GET['ram'];?></td>
            </tr>
            <tr>
                <td width=300px>Storage</td>
                <td width=900px><?php echo $_GET['storage'];?></td>
            </tr>
            <tr>
                <td width=300px>Graphics chipset</td>
                <td width=900px><?php echo $_GET['g_chipset'];?></td>
            </tr>
            <tr>
                <td width=300px>Graphics memory</td>
                <td width=900px><?php echo $_GET['g_memory'];?></td>
            </tr>
            <tr>
                <td width=300px>Networking</td>
                <td width=900px><?php echo $_GET['networking'];?></td>
            </tr>
            <tr>
                <td width=300px>Display port</td>
                <td width=900px><?php echo $_GET['d_port'];?></td>
            </tr>
            <tr>
                <td width=300px>Audio port</td>
                <td width=900px><?php echo $_GET['a_port'];?></td>
            </tr>
            <tr>
                <td width=300px>USB Port</td>
                <td width=900px><?php echo $_GET['u_port'];?></td>
            </tr>
            <tr>
                <td width=300px>Battery</td>
                <td width=900px><?php echo $_GET['battery'];?></td>
            </tr>
            <tr>
                <td width=300px>Weight</td>
                <td width=900px><?php echo $_GET['weight'];?></td>
            </tr>
            <tr>
                <td width=300px>Color</td>
                <td width=900px><?php echo $_GET['color'];?></td>
            </tr>
            <tr>
                <td width=300px>Operating System</td>
                <td width=900px><?php echo $_GET['os'];?></td>
            </tr>
            <tr>
                <td width=300px>Others</td>
                <td width=900px><?php echo $_GET['others'];?></td>
            </tr>
            <tr>
                <td width=300px>Part No</td>
                <td width=900px><?php echo $_GET['part'];?></td>
            </tr>
            <tr>
                <td width=300px>Country of Origin</td>
                <td width=900px><?php echo $_GET['origin'];?></td>
            </tr>
            <tr>
                <td width=300px>Made in Assemble</td>
                <td width=900px><?php echo $_GET['assemble'];?></td>
            </tr>
            <tr>
                <td width=300px>Warranty</td>
                <td width=900px><?php echo $_GET['warranty'];?></td>
            </tr>
            <!-- <tr>
                <td width=300px>RAM type</td>
                <td width=900px>DDR4 2400MHz</td>
            </tr> -->
        </tbody>
    </table>
</div>