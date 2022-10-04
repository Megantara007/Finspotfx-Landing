<div class="sidebar" id="sidebar">
    <div class="in-sidebar" style="position:relative">
        <img src="<?php echo LOGO_DARK ?>" alt="dutch prime securities logo">

        <ul>
            <li><a href="<?php echo BASE ?>cn">首页</a></li>
            <li>
                <span>
                    <a href="about">关于我们 </a><i class="fa fa-plus b-siji"></i>
                </span>
                <div class="drop-sidebar siji">
                    <list><a href="<?php echo CATALOGUE ?>">公司手册</a></list>
                    <list><a href="contact">联系我们</a></list>
                </div>
            </li>
            <li>
                <span>
                    <a href="platform">交易平台 </a>
                </span>
            </li>
            <li>
                <span>
                    <a href="javascript:void()">促销活动 </a><i class="fa fa-plus b-telu"></i>
                </span>

                <div class="drop-sidebar telu">
                    <list><a href="deposit_bonus">入金赠金</a></list>
                </div>
            </li>
            <li>
                <span>
                    <a href="javascript: void(0)">语言 </a><i class="fa fa-plus b-sekawan"></i>
                </span>

                <div class="drop-sidebar sekawan">
                    <list><a rel="dofollow" href="<?php echo BASE ?>en">英文</a></list>
                </div>
            </li>
        </ul>
        
        <div class="sidebar-button">
            <a rel="nofollow" href="https://secure.dutch-primesecurities.com/register/">开设虚拟交易户口</a>
            <a rel="nofollow" href="https://secure.dutch-primesecurities.com/login/">会员中心</a>
        </div>
        <style>
            .sidebar-button{
                width:100%;
                display:flex;
                justify-content: center;
                flex-direction: column;
                align-items: center;
                position: absolute;
                bottom:10px;
            }
            
            .sidebar-button a{
                margin:0 0 10px 0;
                display: block;
                width: 100%;height: 40px;background:#00a516;
                display:flex;
                justify-content: center;
                align-items: center;
                color: #fafafa;
            }
            
            .sidebar-button a:nth-child(1){
                background:#2f3c44;
            }
        </style>
    </div>
</div>

<div class="cvr" id="cvr" onclick="sidebar()"></div>
