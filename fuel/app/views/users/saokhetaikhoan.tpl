{include file="users/submenu_tk.tpl"}
<div class="container">
<table width="100%" border="0" cellpadding="3" cellspacing="3">
            <tbody>
                <tr>
                	<td><h4>Sao kê tài khoản</h4></td>
                </tr>
            </tbody>
            <tbody>
            <tr>
            <td class="bgtable">
                
			<table width="100%" >
			    <tbody><tr>
			        <td style="width:30%" nowrap="nowrap">
			            Thời gian:&nbsp;
			            <select id="drpDate" name="drpDate" class="dropDown"><option value="0">Chọn ngày</option><option value="1">Chọn từ... đến...</option><option value="2">Hôm nay</option><option value="3">Hôm qua</option><option value="4">Tuần này</option><option value="5">Cách đây 1 tuần</option><option value="6" selected="selected">Trong tháng</option><option value="7">Tháng 04/2015</option><option value="8">Tháng 03/2015</option></select>
			        </td>
			        <td nowrap="nowrap" valign="bottom" style="width: 100%">
			            <div id="tdDate" style="display: none;">
			                <div style="float: left;">
			                <div style="float: left; margin-left: 0px;margin-top:3px;">&nbsp;
			                    <span id="6_ltrFromDate"></span>
			                   :&nbsp;</div>
			                    <input type="text" id="txtFromDate" name="txtFromDate" class="inputText date-pick dp-applied" maxlength="10" style="width:70px"><a href="#" class="dp-choose-date" title="Choose date">Choose date</a>
			                </div>
			                <div id="dvToDate" style="display: none;">
			                    <div style="float: left; margin-left: 10px;margin-top:3px;">
			                        Đến:&nbsp;</div>
			                    <input type="text" id="txtToDate" name="txtToDate" class="inputText date-pick dp-applied" maxlength="10" style="width:70px"><a href="#" class="dp-choose-date" title="Choose date">Choose date</a>
			                </div>
			            </div>
			            <div id="tdDateLabel" style="">&nbsp;
			                Từ:&nbsp;
			                <input type="text" id="txtFromLabel" name="txtFromLabel" readonly="readonly" style="width:70px" class="inputText">&nbsp;
			                Đến:&nbsp;
			                <input type="text" id="txtToLabel" name="txtToLabel" readonly="readonly" style="width:70px" class="inputText">
			            </div>
			        </td>
			    </tr>
			</tbody>
			</table>
			</td></tr>
			
			<tr>
            <td class="bgtable">
                
			<table width="100%" >
			    <tbody><tr>
			        
			        <td nowrap="nowrap" class="td-border">
                Giao dịch:
                <select id="TransactionType" name="TransactionType"><option value="-1">--Loại giao dịch--</option>
						<option value="1">Nạp tiền</option>
						<option value="2">Rút tiền</option>
						<option value="3">Thanh toán</option>
						<option value="4">Chuyển tiền</option>
						<option value="5">Hủy nạp tiền</option>
						<option value="6">Hủy rút tiền</option>
						<option value="7">Hủy thanh toán</option>
						<option value="8">Hủy chuyển tiền</option>
						<option value="9">Phí SMS</option>
						<option value="10">Phí rút tiền</option>
						<option value="11">Phí chuyển tiền</option>
						<option value="12">Phí hủy giao dịch</option>
						<option value="13">Phí Nạp tiền Online</option>
						<option value="14">Hoàn tiền</option>
						<option value="15">Phí hoàn tiền</option>
						<option value="16">Nạp thẻ cào</option>
						</select>&nbsp;            
                <input type="button" id="btnSearch" value="Tìm kiếm" class="button">
                &nbsp;
                <input type="submit" id="btnExport" class="button" name="btnExport" value="Xuất excel">                
                &nbsp;
                <button id="btnPrint" class="button" onclick="return false;" style="display:none">
                    In tất cả
                </button>
                &nbsp;
                <button id="btnPrintTime" class="button-x" onclick="return false;" style="display:none">
                    In theo thời gian đã chọn
                </button>
            </td>
			    </tr>
			</tbody>
			</table>
			</td></tr>
			
			</tbody>
			</table>
			<table width="100%" style="margin-top:10px" >
			    <tbody>
			    <tr class="bgtable">
			    	<td>Mã giao dịch</td>
			    	<td>Ngày giao dịch</td>
			    	<td>Loại giao dịch</td>
			    	<td>Mã hóa đơn</td>
			    	<td>Chú thích</td>
			    	<td>Số tiền GD</td>
			    	<td>TKC</td>
			    	<td>KM1</td>
			    	<td>KM2</td>
			    	<td>Số dư</td>
			    </tr>
			    </tbody>
			</table>
			</div>