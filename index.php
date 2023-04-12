<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entain Test</title>
</head>
<style>
    html, body
    {
        margin:0;
        background-color:#002346;
        height:100%;
    }
    *
    {
        box-sizing: border-box;
    }
    @font-face {
        font-family: btHeadline;
        src: url(fonts/BreuerHeadline.ttf);
    }
    @font-face {
        font-family: btMain;
        src: url(fonts/BreuerFont.ttf);
    }
    @font-face {
        font-family: btBold;
        src: url(fonts/BreuerText-Bold.ttf);
    }
    @font-face {
        font-family: btObl;
        src: url(fonts/BreuerHeadline-Oblique.otf);
    }
    @font-face {
        font-family: btMed;
        src: url(fonts/BreuerText-Medium.ttf);
    }
    @font-face {
        font-family: btReg;
        src: url(fonts/BreuerText-Regular.otf);
    }
    .steps
    {
        display:flex;
        transform: translateY(-30px);
    }
    .divider-1
    {
        width:2px;
        background:linear-gradient(to top, transparent, #001549, transparent);
    }
    .divider-2
    {
        width:2px;
        background:linear-gradient(to top, transparent, #0059ef, transparent);
    }
    .steps .step
    {
        flex:1;
        display:flex;
        width:100%;
        height:100px;
        padding-left:10px;
        padding-right:10px;
    }
    .steps .step .info
    {
        font-family: btBold;
        color:white;
        text-shadow:0px 0px 2px black;
        margin-left:10px;
        display:flex;
        align-items: center;
        font-size:20px;
    }
    .steps .step .num-cont
    {
        aspect-ratio: 1/1;
    }
    .steps .step .num-cont .num-body
    {
        height:100%;
        width:100%;
        border-radius:100%;
        position:relative;
    }
    .steps .step .num-cont .num-body .bg
    {
        height:100%;
        width:100%;
        position:relative;
        animation-name: rotation;
        animation-duration: 1.5s;
        animation-timing-function:linear;
        animation-iteration-count: infinite;
    }
    .steps .step .num-cont .num-body .bg .glow-1
    {
        height: 88%;
        width: 30px;
        position: absolute;
        top: 13%;
        background-color: white;
        box-shadow: 0px 0px 3px 5px white;
        left: 23%;
        transform: rotate(-31deg);
        border-radius: 100%;
    }
    .steps .step .num-cont .num-body .bg .glow-2
    {
        height: 30px;
        width: 93%;
        position: absolute;
        top: 38%;
        background-color: white;
        box-shadow: 0px 0px 3px 5px white;
        left: 4%;
        transform: rotate(352deg);
        border-radius: 100%;
    }
    .steps .step .num-cont .num-body .bg .cover
    {
        height:100%;
        width:100%;
        border:2px solid #bdc7d8;
        border-radius:100%;
        background-color:#00214d;
    }
    .steps .step .num-cont .num-body .num-main
    {
        position:absolute;
        height:100%;
        width:100%;
        background-color:transparent;
        top:0;
        left:0;
        border-radius:100%;
        padding:2px;
    }
    .steps .step .num-cont .num-body .num-main .num-bg
    {
        background: radial-gradient(#00214d 69%, transparent 71%);
        height: 100%;
        width: 100%;
        border-radius: 100%;
        padding:3px;
    }
    .steps .step .num-cont .num-body .num-main .num-bg .num
    {
        background: #006fec;
        height:100%;
        width:100%;
        border-radius:100%;
        position:relative;
        display:flex;
        justify-content: center;
        align-items: center;
        font-family: btHeadline;
    }
    .steps .step .num-cont .num-body .num-main .num-bg .num p
    {
        font-size:80px;
        background-color: #002b69;
        color: transparent;
        text-shadow: 0px 0px 6px #00428a;
        -webkit-background-clip: text;
    }
    .steps .step .num-cont .num-body .num-main .num-bg .num .glow
    {
        height: 100%;
        width: 100%;
        position: absolute;
        background: radial-gradient(white -14%, transparent 64%);
        border-radius: 100%;
        mix-blend-mode: overlay;
    }
    body
    {
        display:flex;
        justify-content: center;
        background-image:linear-gradient(to bottom, transparent 70%, #002346), url("img/bg.png");
        background-size:cover;
        background-repeat:no-repeat;
    }
    .container
    {
        width:1000px;
        background-color:transparent;
    }
    .header
    {
        display:flex;
        align-items: center;
        justify-content: space-between;
        padding-top:30px;
    }
    .header .login-cont
    {
        display:flex;
        font-family: btMain;
        cursor: pointer;
    }
    .header .login-cont .customer
    {
        padding:5px;
        color:white;
        border:1px solid white;
        border-radius:3px;
        font-size:13px;
        padding-right:8px;
        text-decoration: underline;
        cursor: pointer;
    }
    .header .login-cont button
    {
        background-color:#ffea00;
        border-radius:3px;
        border:0px;
        font-family: btHeadline;
        font-size: 20px;
        padding: 0px 8px;
        transform: translateX(-4px);
        cursor: pointer;
    }
    .header .login-cont button p
    {
        margin:0;
        background-color: #9c7200;
        color: transparent;
        text-shadow: 0px 0px 1px #c08c00;
        -webkit-background-clip: text;
    }
    .main-body
    {
        position:relative;
    }
    .main-body img
    {
        width:100%;
    }
    .main-body .form
    {
        position:absolute;
        top:0px;
        left:0px;
        height:100%;
        width:100%;
        display:flex;
        flex-direction: column;
        align-items: center;
        padding-top: 20.4%;
    }
    .main-body .form .form-head
    {
        background-color:#ffe900;
        height:20px;
        font-family: btBold;
        display:flex;
        justify-content: center;
        align-items: center;
        padding-left:10px;
        padding-right:10px;
        clip-path: polygon(7% 0%, 93% 0%, 100% 50%, 93% 100%, 7% 100%, 0% 50%);
        box-shadow:0px 0px 3px black;
    }
    .main-body .form .form-head p
    {
        margin:0;
        background: -webkit-linear-gradient(#0058ba, #004798);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
        font-size: 14px;
    }
    .form .text-white, .form .text-large, .form .text-xl
    {
        font-family:btObl;
        text-shadow:0px 0px 2px rgba(0,0,0,0.5);
        text-align:center;
        
    }
    .form .text-white
    {
        color: white;
        font-size:20px;
        margin-top:3px;
    }
    .form .text-large
    {
        color:#ffe400;
        font-size: 38px;
        line-height: 0.85;
    }
    .form .text-xl
    {
        color:#ffe400;
        font-size: 75px;
        line-height: 0.75;
    }
    .form .text-small
    {
        font-family:btMed;
        color:white;
        text-align:center;
        font-size:12px;
        line-height: 2;
    }
    .form input
    {
        padding: 5px 9px;
        font-family: btReg;
        font-size:16px;
    }
    .form input::placeholder
    {
        color:#777777;
    }
    input:focus{
        outline: none;
    }
    .bet-now
    {
        border:1.5px solid #ea4632;
        border-radius:10px;
        padding:1.5px;
        background-color:#ffcf00;
        margin-top:10px;
        width:190px;
        cursor: pointer;
        height:35px;
    }
    .bet-now button
    {
        height:100%;
        cursor: pointer;
        border:1.5px solid #77bc20;
        border-radius: 7px;
        font-family:btBold;
        font-style: italic;
        color:white;
        padding:0px;
        width:100%;
        font-size:16px;
        text-shadow:0px 0px 1px black;
        background:linear-gradient( to left, #24204b, #65ade0, #24204b);
        overflow:hidden;
        position:relative;
    }
    .bet-now button .bg
    {
        height:100%;
        width:100%;
        background:linear-gradient( to left, #65ade0, #24204b, #65ade0);
        opacity:0;
        transition:0.2s;
    }
    .bet-now:hover button .bg
    {
        opacity:1;
    }
    .bet-now .text
    {
        position:absolute;
        top:0px;
        left:0px;
        width:100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .footer
    {
        display:flex;
        flex-direction: column;
        align-items: center;
        font-family: Arial;
        color:white;
        gap:25px;
        padding-bottom:25px;
    }
    .footer .about
    {
        display:flex;
        gap:7px;
    }
    .footer .about .arrow
    {
        transform: rotate(-90deg);
        transition:0.2s;
    }
    .footer .about.open .arrow
    {
        transform: rotate(0deg);
    }
    .footer-bottom
    {
        font-size:12px;
        display:flex;
        gap:5px;
    }
    .footer-bottom div
    {
        cursor: pointer;
    }
    .coral-redirect
    {
        cursor: pointer;
    }
    .about-full
    {
        overflow:hidden;
        max-height:0px;
        width:100%;
        background-color:#001f3f;
        transition:0.5s;
        padding: 0px 20px;
    }
    .about-full.open
    {
        max-height:1000px;
        padding:20px 20px;
    }
    .about-full h1
    {
        margin-top:0px;
    }
    .modal
    {
        opacity:0;
        pointer-events: none;
        position: fixed;
        z-index: 1;
        height:100%;
        width:100%;
        background-color:rgba(0,0,0,0.5);
        display:flex;
        justify-content: center;
        padding:100px 0px;
        overflow-y:scroll;
        transition:0.2s;
    }
    .modal.open
    {
        opacity:1;
        pointer-events:auto;
    }
    .modal .modal-body
    {
        width:600px;
    }
    .modal .modal-body .modal-header
    {
        background-color:#007fdd;
        height:30px;
        width:100%;
        border-left:1px solid #003268;
        border-top:1px solid #003268;
        border-right:1px solid #003268;
        border-radius:5px 5px 0px 0px;
        padding-top:1px;
        padding-left:1px;
        display:flex;
        gap:1px;
    }
    .modal .modal-body .modal-header div
    {
        background:linear-gradient(to bottom, #005abc, #004697);
    }
    .modal .modal-body .modal-header .i-cont
    {
        aspect-ratio: 1/1;
        border-radius:3px 0px 0px 0px;
        display:flex;
        justify-content: center;
        align-items: center;
    }
    .modal .modal-body .modal-header .modal-main-header
    {
        border-radius:0px 3px 0px 0px;
        flex:1;
        font-family: Arial;
        color:white;
        display:flex;
        justify-content: space-between;
        align-items: center;
        padding-left:10px;
    }
    .modal .modal-body .modal-header .modal-main-header button
    {
        border:0px;
        background-color:transparent;
        margin-right:5px;
        cursor: pointer;
    }
    .modal .modal-body .modal-main
    {
        background-color:white;
        border-radius:0px 0px 3px 3px;
        padding:15px;
        font-family: 'Arial';
        font-size:12px;
        border-left:1px solid #a9a9aa;
        border-bottom:1px solid #a9a9aa;
        border-right:1px solid #a9a9aa;
    }
    .modal .pad
    {
        height:100px;
        width:100%;
    }
    .email-validate.red
    {
        color:red;
    }
    .email-validate.green
    {
        color:green;
    }
    .email-validate
    {
        height:5px;
        font-size:12px;
    }
    @keyframes rotation{
        0%
        {
            transform: rotate(0deg);
        }
        100%
        {
            transform: rotate(360deg);
        }
    }
</style>
<body>
    <div class="container">
        <div class="header">
            <img src="img/coral-logo.png" class="coral-redirect" alt="">
            <div class="login-cont">
                <div class="customer">I'm Already a Customer</div>
                <button>
                    <p>LOGIN</p>
                </button>
            </div>
        </div>
        <div class="main-body">
            <img src="img/form-bg.png"/>
            <div class="form">
                <div class="form-head"><p>New Customer Offer</p></div>
                <div class="text-white">
                    LIVERPOOL v AUGSBERG
                </div>
                <div class="text-large">
                    LIVERPOOL TO WIN<br/>IN 90 MINS
                </div>
                <div class="text-xl">
                    8/1
                </div>
                <div class="text-small">
                    £/€ 5 Bet Only | PLUS £/€5 Free Bet should your bet lose
                </div>
                <input type="text" placeholder="Email" class="email">
                <div class="email-validate"></div>
                <div class="bet-now">
                    <button>
                        <div class="bg"></div>
                        <div class="text">BET NOW >></div>
                    </button>
                </div>
            </div>
        </div>
        <div class="steps">
            <div class="step">
                <div class="num-cont">
                    <div class="num-body">
                        <div class="bg">
                            <div class="cover"></div>
                            <div class="glow-1"></div>
                            <div class="glow-2"></div>
                        </div>
                        <div class="num-main">
                            <div class="num-bg">
                                <div class="num">
                                    <p>
                                        1
                                    </p>
                                    <div class="glow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    Register &  Deposit £/€5  or More
                </div>
            </div>
            <div class="divider-1"></div>
            <div class="divider-2"></div>
            <div class="step">
                <div class="num-cont">
                    <div class="num-body">
                        <div class="bg">
                            <div class="cover"></div>
                            <div class="glow-1"></div>
                            <div class="glow-2"></div>
                        </div>
                        <div class="num-main">
                            <div class="num-bg">
                                <div class="num">
                                    <p>
                                        2
                                    </p>
                                    <div class="glow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    Your Enhanced  Odds Will  Display On The  Homepage
                </div>
            </div>
            <div class="divider-1"></div>
            <div class="divider-2"></div>
            <div class="step">
                <div class="num-cont">
                    <div class="num-body">
                        <div class="bg">
                            <div class="cover"></div>
                            <div class="glow-1"></div>
                            <div class="glow-2"></div>
                        </div>
                        <div class="num-main">
                            <div class="num-bg">
                                <div class="num">
                                    <p>
                                        3
                                    </p>
                                    <div class="glow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info">
                    If Your Bet  Wins Your Winnings  Will Be Paid As  A £/€40 Free 
                </div>
            </div>
        </div>
        <div class="footer">
            <img src="img/ga-logo.png" />
            <div class="footer-bottom">
                <div class="about">
                    <div class="arrow">▼</div>
                    <u>About Coral Sports Betting</u>
                </div>
                |
                <div class="modal-open"><u>Terms & Conditions</u></div>
            </div>
            <div class="about-full">
                <h1>Coral Sports Betting</h1>
                Coral are one of the UK’s most trusted and respected bookmakers in the betting industry. With over 1700 betting shops around the UK and a dedicated sportsbook and gaming website, Coral are odds on to give great value for money and outstanding customer service around the clock. What’s more, our online, mobile and tablet offering makes betting on-the-go even easier.
                <br/><br/>
                Coral offers a range of great markets on a variety of sports such as horse racing, football, tennis and much more. So if you’re looking for a bet on a huge sporting event such as the Grand National, Wimbledon, The FA Cup, or the Premier League then check out our magnitude of outright, score cast and in-play betting markets.  Alternatively, if you’re an avid race goer with a passion for horses or just love to make your Saturday afternoons come alive with a bet on the football, then we’ve got all bases covered. In addition, our great bonuses and money-back specials make your money go further every time you visit. Furthermore, if you enjoy in-play betting then we’re well placed to provide a full service in-play offering across a number of sports around the world.
                <br/><br/>
                Coral are well known for their horse racing expertise, that’s why we’ve got the odds for every race meeting across the country covered, from Aintree to Ascot and Cheltenham to Chepstow. Not only can you bet on every race, our streaming service lets you watch the race live online once you’ve placed your bet, allowing you to get even closer to the action from the comfort of your PC or mobile!
                <br/><br/>
                For football fans, our markets are second to none with competitive prices designed to offer true value for money. Whether you’re looking for odds across England’s top divisions, or various leagues from around Europe and the world then our football section has all you need.
                <br/><br/>
                Whatever sport you’re looking for, you’re sure to find an unbeatable betting experience with Coral in-store, online and on your mobile. So take advantage of over 80 years of experience in the industry and ‘back us’ to deliver your perfect betting experience.
            </div>
        </div>
    </div>
    <div class="modal">
        <div class="modal-body">
            <div class="modal-header">
                <div class="i-cont"><img src="img/info-icon.png" alt=""></div>
                <div class="modal-main-header">
                    <b>Terms and Conditions</b>
                    <button class="close"><img src="img/close.png" alt=""></button>
                </div>
            </div>
            <div class="modal-main">
            1. The £30 free bet offer is available for new coral.co.uk customers who deposit and bet a total of £30 on any sports event(s).
            <br/><br/>2. The free bet will be triggered by the first deposit amount and will not be applicable for subsequent deposit values.
            <br/><br/>3. Customers depositing and staking less than £30 will receive the equivalent free bet value. For example: a customer that deposits an initial amount of £5 will be credited with a £5 free bet once they have bet a total of £5 on any sports event(s).
            <br/><br/>4. Advertised offers relating to the opening of a Coral.co.uk account are limited to one per customer.
            <br/><br/>5. In the case of a customer opening more than one Coral.co.uk account, we reserve the right to suspend and close duplicate accounts, and make void any bets placed.
            <br/><br/>6. Please note that the free bet will only appear in your account once the amount of your own deposit has been bet with on any sporting event(s) (this doesn't have to be bet as one go but can be bet in increments). The free bet must then be staked before any withdrawal is permitted. Void bets do not count toward this offer.
            <br/><br/>7. The free bet can be used on "sports" events and are not valid for Games, Casino, Virtual Sports, Poker, Lotto, Bingo, Live Casino.
            <br/><br/>8. The free bet can be redeemed on win or each-way bets and can used on the following listed bet types: single, double, treble, 4-fold and upwards accumulator, forecast, combination forecast, tricast and combination tricast.
            <br/><br/>9. The original free bet stake is not returned with any winnings.
            <br/><br/>10.The free bet is not valid on tote, other combination and multiple bets (i.e Lucky 15s)
            <br/><br/>11. The free bet is valid for 30 days.
            <br/><br/>12. We reserve the right to amend or withdraw any promotion at any point for whatever reason.
            <br/><br/>13. Coral.co.uk rules apply.
            <br/><br/>14. Offer only available to UK Residents aged 18 or over.
            </div>
            <div class="pad"></div>
        </div>
    </div>
</body>
<script
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        const about = $('.about')
        const about_f = $('.about-full')
        const coral_r = $('.coral-redirect')
        const cust_r = $('.customer')
        const modal = $('.modal')
        const modal_close = $('.modal .close')
        const modal_open = $('.modal-open')
        const bet_now = $('.bet-now button')
        const email_input = $('.email')
        const email_validate = $('.email-validate')

        modal_close.click(() => {
            modal.removeClass('open')
        })

        modal_open.click(() => {
            modal.addClass('open')
        })

        bet_now.click(()=> {
            const email = email_input.val()
            if(email)
                $.ajax({
                    url: 'validator/email-validator.php',
                    method: 'POST',
                    data: {
                        email
                    }
                }).then(d => {
                    const data = JSON.parse(d)
                    if(data.error)
                        email_validate.removeClass('red green').addClass('red').html(data.message)
                    else
                    {
                        email_validate.removeClass('red green').addClass('green').html(data.message)
                        window.location.href = `http://www.coral.co.uk/register?email=${email}`
                    }
                })
        })
        
        about.click(() => {
            about.hasClass('open') ? about.removeClass('open') : about.addClass('open')
            about_f.hasClass('open') ? about_f.removeClass('open') : about_f.addClass('open')
        })

        coral_r.click(() => {
            window.location.href = 'http://www.coral.co.uk'
        })

        cust_r.click(() => {
            window.location.href = 'http://www.coral.co.uk?client=true'
        })
    </script>
</html>