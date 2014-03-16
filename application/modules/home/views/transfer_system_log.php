<div style="width:725px; height:inherit; margin-left:10px; float:right;"><style type="text/css">
                        .hilinghtStyleDiv{
                            width:710px; 
                            height:20px; 
                            background-color:#DAEAFE;
                        }
                        .NoneStyleDiv{
                            width:710px; 
                            height:20px; 
                        }
                        .MaGDStyle{
                            width:110px;
                            margin-top:3px;
                            float:left;
                        }
                        .tieudeStyle{
                            width:280px; 
                            margin-top:3px;
                            float:left;
                        }
                        .tinhtrangStyle{
                            width:120px; 
                            margin-top:3px; 
                            float:left;
                        }
                        .thoigianStyle{
                            width:200px; 
                            margin-top:3px; 
                            float:left;
                        }
                        .hisPage{
                            background-color:#F60; 
                            border:#F60; 
                            width:15px; 
                            height:15px; 
                            float:left; 
                            margin:1px; 
                            color:#FFF;
                        }
                        .hisPageNow{
                            background-color:#06C; 
                            border:#F60; 
                            width:15px; 
                            height:15px; 
                            float:left; 
                            margin:1px; 
                            color:#FFF;
                        }
                    </style>
                    <div id="boxContent" align="left"><div class="textformTop" style="color:#000; float:left;">Lịch sử giao dịch</div>
                        <div id="relaLink"><a href="http://card.gamebank.vn/?mod=cad" style="color:#999;">Mua mã thẻ</a> | <a href="http://pay.gamebank.vn/" style="color:#999;">Nạp tiền</a></div></div>

                    <div id="ContentContainer" style="font-family:Tahoma; font-size:12px;" align="center" >

                        <div style="width:710px; height:20px; background-color:#F60; font-weight:700; color:#FFF; margin-top:5px;">
                           
                            <div class="tieudeStyle">
                                Số tiền
                            </div>
                            <div class="tinhtrangStyle">
                              Hành động
                            </div>
                            <div class="thoigianStyle">
                                Thời gian
                            </div>
                            
                        </div>
                        <?php 
                        foreach($list_transaction as $transaction)
                        {
                        ?>
                        <a>
                            <div class="NoneStyleDiv">
                               
                                <div class="tieudeStyle" align="left">
                                    <div style="margin-left:2px;">
                                        <?php echo number_format($transaction['money'])?>
                                    </div>
                                </div>
                                <div class="tinhtrangStyle">
                                    <?php 
                                    if($transaction['action']==0)
                                    {
                                    ?>
                                    <div class="divIcon finishIcon"></div>
                                    <div style="width:104px;" align="left">&nbsp;<span>Cộng tiền</span></div>
                                    <?php } else {?>
                                    <div class="divIcon debitMoneyIcon"></div>
                                    <div style="width:104px;" align="left">&nbsp;<span>Trừ tiền</span></div>
                                    <?php } ?>
                                </div>
                                <div class="thoigianStyle" align="right">
                                    <?php echo date('d/m/Y',$transaction['create_date']);?> [<?php echo date('h:i:s',$transaction['create_date']);?>]
                                </div>
                            </div>
                        </a>
                        <?php }?>
                        <div style="width:710px; height:20px; margin-top:5px;" align="right">
                            <div style="float:left;" align="right">
                                Trang
                            </div>
                            <div style="float:right">
                                <?php echo $this->pagination->create_links();?>
                            </div>
                        </div>
                    </div>

                </div>