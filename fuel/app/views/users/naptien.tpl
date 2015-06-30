{include file="users/submenu_tk.tpl"}
<table width="100%" border="0" cellpadding="3" cellspacing="3">
            <tbody>
                <tr>
                    <td align="left" style="width:40%">
                        <h4 class="border">
                            CHỌN PHƯƠNG THỨC NẠP TIỀN</h4>
                    </td>
                    <td>
                        <div style="float: right; line-height: 22px">
                            Quý khách nạp tiền vào tài khoản MBPay sẽ được tặng thêm tiền khuyến mãi <span style="font-size: 16px;
                                color: Red">lên tới 50%</span> (áp dụng trên tất cả các kênh nạp tiền từ T12/2014)
                            <a onclick="javascript:window.open('https://mbpay.vn/huong-dan/khuyen-mai-nap-tien.html');" style="cursor:pointer; color:Blue">Xem chi tiết</a> 
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <table width="100%" border="1" class="tableboder">
                            <tbody><tr>
                                <td width="170px">
                                    <a href="#" onclick="setPayGate('rdoMbpay','MBPay');">
                                        <img src="/Content/images/the-tra-truoc-mbpay.jpg" width="150" height="60" border="0" title="Nạp tiền vào tài khoản MBPay bằng thẻ cào MBPay"></a>
                                </td>
                                <td class="rightBank">
                                    <input type="radio" id="rdoMbpay" name="rechangGroup" value="MBPay" style="display: none">
                                    <font style="font-weight: bold"><a href="#" onclick="setPayGate('rdoMbpay','MBPay');">
                                        Nạp tiền  vào tài khoản MBPay bằng thẻ cào MBPay</a></font>
                                    <br>
                                    <span class="Note" style="padding-left: 25px">Có bán tại các VPGD của Mua&amp;Bán</span>
                                </td>
                                <td style="width: 100px; text-align: center">
                                    <a href="/AccountBalance/Confirm_Deposit?id=3&amp;cardType=MBPAY" class="button">Nạp tiền »</a>
                                </td>
                            </tr>
                            <tr>
                                <td width="100px">
                                    <a href="#" onclick="setPayGate('rdoMobile','Mobifone');">
                                        <img src="/Content/images/mobi.jpg" border="0" title="Nạp tiền vào tài khoản MBPay bằng thẻ cào điện thoại Mobifone"></a>
                                </td>
                                <td class="rightBank">
                                    <input type="radio" id="rdoMobile" name="rechangGroup" value="Mobifone" style="display: none">
                                    <font style="font-weight: bold"><a href="#" onclick="setPayGate('rdoMobile','Mobifone');">
                                        Nạp tiền vào tài khoản MBPay bằng thẻ cào điện thoại Mobifone</a></font>
                                    <br>
                                    <span class="Note" style="padding-left: 25px">Áp dụng cho mọi mệnh giá thẻ</span>
                                </td>
                                <td style="width: 100px; text-align: center">
                                    <a href="/AccountBalance/Confirm_Deposit?id=1&amp;cardType=Mobifone" class="button">Nạp tiền »</a>
                                </td>
                            </tr>
                            <tr>
                                <td width="150px">
                                    <a href="#" onclick="setPayGate('rdVina','Vinaphone');">
                                        <img src="/Content/images/vina.jpg" border="0" title="Nạp tiền vào tài khoản MBPay bằng thẻ cào điện thoại VinaPhone"></a>
                                </td>
                                <td class="rightBank">
                                    <input type="radio" id="rdVina" name="rechangGroup" value="Vinaphone" style="display: none">
                                    <font style="font-weight: bold"><a href="#" onclick="setPayGate('rdVina','Vinaphone');">
                                        Nạp tiền vào tài khoản MBPay bằng thẻ cào điện thoại VinaPhone</a></font>
                                    <br>
                                    <span class="Note" style="padding-left: 25px">Áp dụng cho mọi mệnh giá thẻ</span>
                                </td>
                                <td style="width: 100px; text-align: center">
                                    <a href="/AccountBalance/Confirm_Deposit?id=1&amp;cardType=Vinaphone" class="button">Nạp tiền »</a>
                                </td>
                            </tr>
                            <tr>
                                <td width="150px">
                                    <a href="#" onclick="setPayGate('rdViettel','Viettel');">
                                        <img src="/Content/images/viettel.jpg" border="0" title="Nạp tiền vào tài khoản MBPay bằng thẻ cào điện thoại Viettel"></a>
                                </td>
                                <td class="rightBank">
                                    <input type="radio" id="rdViettel" name="rechangGroup" value="Viettel" style="display: none">
                                    <font style="font-weight: bold"><a href="#" onclick="setPayGate('rdViettel','Viettel');">
                                        Nạp tiền vào tài khoản MBPay bằng thẻ cào điện thoại Viettel</a> </font>
                                    <br>
                                    <span class="Note" style="padding-left: 25px">Áp dụng cho mọi mệnh giá thẻ</span>
                                </td>
                                <td style="width: 100px; text-align: center">
                                    <a href="/AccountBalance/Confirm_Deposit?id=1&amp;cardType=Viettel" class="button">Nạp tiền »</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" onclick="setPayGate('rdSmartLink','SmartLink');">
                                        <img src="/Content/images/smartlink.jpg" border="0" title="Nạp tiền vào tài khoản MBPay bằng thẻ nội địa ATM"></a>
                                </td>
                                <td class="rightBank">
                                    <input type="radio" id="rdSmartLink" name="rechangGroup" value="SmartLink" style="display: none">
                                    <font style="font-weight: bold"><a href="#" onclick="setPayGate('rdSmartLink','SmartLink');">
                                        Nạp tiền vào tài khoản MBPay bằng thẻ nội địa ATM</a></font>
                                    <br>
                                    <span class="Note" style="padding-left: 25px">Thẻ của bạn phải được kích hoạt chức năng
                                        thanh toán trực tuyến.</span>
                                    <br>
                                    <img src="/Content/images/bank.jpg" border="0">
                                </td>
                                <td style="width: 100px; text-align: center">
                                    <a href="/AccountBalance/Confirm_Deposit?id=2&amp;cardType=SmartLink" class="button">Nạp tiền »</a>
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                </tr>
                <tr style="display: none">
                    <td class="left">
                    </td>
                    <td class="right">
                        <input type="button" value="Tiếp tục »" id="btnPay" class="button">&nbsp;
                        <input type="button" value="Danh sách nạp tiền" class="button-m" id="btnReturn">
                    </td>
                </tr>
            </tbody>
        </table>