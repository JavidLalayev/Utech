<div class="preloader" style="background-color: white">
<!--   <div class="ca_out">-->
<!--           <div class="ca_fade-in">-->
<!--               <div class="ca_container">-->
<!--                   <div class="ca_one ca_common"></div>-->
<!--                   <div class="ca_two ca_common"></div>-->
<!--                   <div class="ca_three ca_common"></div>-->
<!--                   <div class="ca_four ca_common"></div>-->
<!--                   <div class="ca_five ca_common"></div>-->
<!--                   <div class="ca_six ca_common"></div>-->
<!--                   <div class="ca_seven ca_common"></div>-->
<!--                   <div class="ca_eight ca_common"></div>-->
<!--               </div>-->
<!--           </div>-->
<!--       </div>-->


    <div class="lds-ripple"><div></div><div></div></div>

    <style>
        .lds-ripple {
            /*display: inline-block;*/
            /*position: relative;*/
            position:absolute; /*it can be fixed too*/
            left:-64px; right:0;
            top:-64px; bottom:0;
            margin:auto;
            width: 64px;
            height: 64px;
        }
        .lds-ripple div {
            position: absolute;
            left:0; right:0;
            top:0; bottom:0;
            border: 4px solid #60afef;
            opacity: 1;
            border-radius: 50%;
            animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
        }
        .lds-ripple div:nth-child(2) {
            animation-delay: -0.5s;
        }
        @keyframes lds-ripple {
            0% {
                top: 75px;
                left: 75px;
                width: 0;
                height: 0;
                opacity: 1;
            }
            100% {
                top: -1px;
                left: -1px;
                width: 158px;
                height: 158px;
                opacity: 0;
            }
        }

    </style>

</div>


