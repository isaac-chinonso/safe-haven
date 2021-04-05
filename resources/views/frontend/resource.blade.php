@extends('layout.master')
@section('title')
Resources || Safe Haven
@endsection

@section('content')
<!-- ##### Welcome Area Start ##### -->
<div class="breadcumb-area clearfix auto-init">

    <!-- breadcumb content -->
    <div class="breadcumb-content">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="breadcumb--con text-center">
                        <h2 class="w-text title wow fadeInUp" data-wow-delay="0.2s">Resources</h2>
                        <ol class="breadcrumb justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Resources</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Welcome Area End ##### -->
<div class="blog-content">
    <!-- ##### FAQ & Timeline Area Start ##### -->
    <div class="faq-timeline-area section-padding-100-0" id="faq">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12 col-md-12">
                    <div class="info-faq-area mt-s ">
                        <dl style="margin-bottom:0">
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.2s">Frequently Asked Questions
                            </dt>
                            <dd class="fadeInUp" data-wow-delay="0.3s">
                                <h6>What is Safe Haven?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Safe Haven Fund is one of the top web app that allows users to easily buy into a managed cryptocurrency portfolio, without holding user assets. Our mission is to bring institutional fund management expertise and technology to anyone with a mobile device
                                    and a few hundred dollars. Choose from multiple indexes or portfolios that are professionally rebalanced.
                                </p>
                                <h6>How are you different from other custodial exchanges like Coinbase, Binance, Robinhood, PayPal etc.?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    We are non-custodial, meaning you hold onto your own assets. We programmatically create the necessary wallets on your behalf but only you can access the wallets through your mobile device. Most non-custodial solutions require users to manage complex private
                                    keys which are cumbersome to remember Haven and store safely. At Safe Haven, we make managing your account easy with a secure username/password system, however you always have access to your keys if you need them.
                                </p>
                                <p style="text-align: justify;font-size: 13px;">
                                    Safe Haven Fund is a non-custodial DeFi platform, which means only you have access to your private keys, no personal information (aside from your email) is stored, and you have access to an open, permissionless, censorship-resistant & decentralized investing
                                    experience. With Safe Haven you're interacting directly with the blockchain and you retain the core values that make Bitcoin & blockchain so powerful.
                                </p>
                                <h6>What is the minimum investment I need to start?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Our minimums are dictated by mining fees to protect investor ROI. Currently, the lowest minimum deposit required is $10,000.
                                </p>
                                <h6>How much does it cost to invest with Safe Haven?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Safe Haven Fund charges 1.5% when users buy into or sell out of a portfolio. We’re also launching new portfolios that are charged on AUM (assets under management) instead of buy and sell fees. You will always be shown the fees upfront and since every
                                    transaction is done on the blockchain, and you can easily audit all of the fees charged.
                                </p>
                                <p style="text-align: justify;font-size: 13px;">
                                    We execute every transaction (rebalances, deposits, withdraws) on-chain, so there will be small/variable mining fees associated to complete the transaction. These fees do not go to Safe Haven Fund.
                                </p>
                                <p style="text-align: justify;font-size: 13px;">
                                    ATTENTION/DISCLAIMER: Due to the recent interest in the space, Ethereum mining fees to complete transactions are higher than normal. Prior to investing, you can see an estimated cost to invest by tapping on the “Invest” button on a portfolio.
                                </p>
                                <h6>What are mining fees?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Mining fees are fees that credit cryptocurrency miners for processing transactions on the blockchain and secure the network. Note that mining fees do not go to Safe Haven Fund.
                                </p>
                                <h6>What does non-custodial mean? Why is it important?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Given current geo-political and economic conditions, custody is more important than ever. Non-custodial simply means we do not hold on to, have the ability to move, or control your assets in any way, shape or form. Only you have access to it.
                                </p>
                                <p style="text-align: justify;font-size: 13px;">
                                    Our fundamental belief is that cryptocurrency assets weren’t designed to be held in central repositories.
                                </p>
                                <p style="text-align: justify;font-size: 13px;">
                                    Since the inception of cryptocurrency, the industry has seen numerous hacks against custodial exchanges. Billions have already been stolen or gone missing. Custodial exchanges, despite their best efforts, will continue to be hacked. Holding onto your
                                    own assets mitigates this risk.
                                </p>
                                <p style="text-align: justify;font-size: 13px;">
                                    We've also seen time and time again that centralized institutions (big banks/businesses, government) succumb to pressures of profit and politics and violate consumer trust. Numerous companies in the space misrepresent how funds are used, freeze accounts
                                    without cause, bake in exorbitant fees, and conduct unethical activities. When you have custody of your own assets, you are in full control of the asset without reliance on a third party. All of your assets are
                                    secured and corroborated by an open, trustless, transparent, decentralized, incorruptible blockchain, not a centralized institution.
                                </p>
                                <h6>How are you different from investing in a crypto hedge fund?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Current hedge funds are reserved for accredited investors. This means you need to have over $1,000,000 worth of assets or make over $200,000 per year. Most of these funds have high management fees and hold onto your assets on your behalf. Preserving the
                                    original ethos of blockchain, our goal is to make cryptocurrency ownership and investing approachable to everyone.
                                </p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.3s">Getting Started
                                we deiver?</dt>
                            <dd>
                                <h6>How do I get started investing?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Once you make an account and store your login credentials in a safe place, you just need to fund your Safe Haven Wallet (“Wallet” tab in-app) with Bitcoin!
                                </p>
                                <p style="text-align: justify;font-size: 13px;">
                                    You can tap on the "Fund this Bitcoin Wallet" button under the "Wallet" tab, and you'll be able to transfer BTC into Safe Haven by either transferring from Coinbase, an external wallet, or by purchasing BTC through one of our partners. Once your wallet
                                    has been funded, feel free to tap on any of the portfolios under the "Invest" tab to begin investing.
                                </p>
                                <h6>I’m not in Nigeria? Can I still use Safe Haven?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Yes! As long as you have Bitcoin, you will be able to invest in any Safe Haven portfolio.
                                </p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.4s">Depositing</dt>
                            <dd>
                                <h6>How do I deposit into the app?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    To make Deposit into the app, You can send Bitcoin directly from an external wallet or exchange to your Safe Haven wallet.
                                </p>
                                <h6>What currency do you need to deposit to fund your wallet?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    All of our wallets are funded with BTC, ETH, LTC and USDT. Other options coming soon.
                                </p>
                                <h6>How do I create a portfolio? I don’t have Bitcoin yet.</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Safe Haven portfolios are purchased using Bitcoin. You can deposit BTC from an external wallet of your choice to fund a portfolio.
                                </p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.3s">Withdrawing</dt>
                            <dd>
                                <h6>How do I withdraw my portfolio?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    To withdraw a portfolio, you will sell your portfolio by tapping the “Sell” button in the app. Your portfolio will be sold into Bitcoin that goes directly to your Safe Haven wallet. From there, you can send your Bitcoin to any exchange to cash out for
                                    fiat currency. We’re launching a feature in app that allows you to sell directly into your bank soon.
                                </p>
                                <h6>Can I sell part of my fund?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    If you have funded a portfolio, simply tap "Sell". You will be presented a scroller to adjust how much of the fund you want to sell.
                                </p>
                                <h6>I’ve sold my portfolio but my BTC hasn’t shown up in my Safe Haven wallet?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    If you’ve sold your portfolio, try pulling down on the wallet screen to refresh your transactions. If this doesn’t work, try logging out and logging back into the app.
                                </p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.3s">Accounts</dt>
                            <dd>
                                <h6>Can I have multiple accounts?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Yes, you can create multiple accounts with different usernames.
                                </p>
                                <h6>Where can I find my username?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    In the app, tap on the Settings page. Scroll down to the bottom and it's listed below the Sign out button.<br><br> If you've previously signed in using this phone you can also hit the dropdown arrow on the sign-in
                                    screen. Your username will be saved there and auto-populate on tap.
                                </p>
                                <h6>Can I open a business account?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Safe Haven is considered a non-custodial crypto wallet rather than a traditional business investment account, so we don’t store any personal/business information. We recommend reaching out to a licensed tax advisor to see if your company can self-custody
                                    crypto assets.
                                </p>
                                <h6>How can I set a beneficiary?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Since Safe Haven is considered a non-custodial crypto wallet rather than a traditional investment account and don't store any of your personal information, we aren't able to set up a beneficiary for your account. Since we don't store your login credentials
                                    and aren't able to access your funds on your behalf, we do recommend keeping your username/password written down in a safe location for yourself, and any potential family members who you'd like as your successor.
                                </p>
                                <h6>Do we provide tax docs?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Since we don’t store any personal info, we aren’t able to generate a traditional 1099 tax form. However you can tap on the Transaction History button on the “Settings” tab to download a full report of your trades.
                                </p>
                                <p style="text-align: justify;font-size: 13px;">
                                    To invest in a portfolio, you first need to start with Bitcoin so you should be able to start from the bottom of the CSV and work your way upwards. Additionally, whenever you sell out of a portfolio, the coins are in that portfolio will all be traded
                                    for Bitcoin. There should be a timestamp on the left side of the CSV for each transaction. The input coin is the coin you are trading out of, and the output coin is the coin that you are receiving.
                                </p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.3s">Security/Privacy</dt>
                            <dd>
                                <h6>How secure is Safe Haven?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Safe Haven is developed with a focus on security, usability, and privacy. Our wallet technology provides state of the art security for users, making control of digital assets simple by abstracting complex private keys to username, password, and PIN code.
                                </p>
                                <p style="text-align: justify;font-size: 13px;">
                                    Safe Haven knows nothing about the encrypted data it interacts with. This data is only accessible to the user. All data is fully encrypted before it touches our servers and can only be decrypted by the user while using the app. Safe Haven does not store
                                    any information from user wallets, move funds, and cannot interact with the blockchain on behalf of the user. It's not just end-to-end encryption; it is Zero-Knowledge architecture. This means that in the unlikely
                                    scenario of Safe Haven being hacked, there would be no sensitive user data for an attacker to steal.
                                </p>
                                <h6>How do you protect my privacy?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Privacy is a native feature of Safe Haven. We do not ask, store, or collect any sensitive user data. Our servers will never contain sensitive user data. This makes Safe Haven servers of no use to an attacker in the unlikely scenario our databases were
                                    hacked or compromised. Everything is transcribed and corroborated on the blockchain, not Safe Haven.
                                </p>
                                <h6>Do we store any personal information?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Nope, we only store your email so send you account updates. Since Safe Haven doesn’t store your login credentials, we recommend writing them down and storing them in a safe place!
                                </p>
                                <h6>Are my funds safe? Do I need to trust Safe Haven?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Since we are non-custodial, you own the actual coins on the respective blockchains. There's no need to trust a third party. We operate on a Zero-Knowledge architecture, meaning we don't store any sensitive information and you will always have access to
                                    your funds.
                                </p>
                                <p style="text-align: justify;font-size: 13px;">
                                    You own your own private keys so you are free to access your assets at all times through Safe Haven or another wallet provider.
                                </p>
                                <h6>What happens if I lose my phone or it is stolen?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    You can download the Safe Haven on another phone and log in with your username and password to get full access to your funds. No one will be able to send your funds from your wallet without proper credentials.
                                </p>
                                <h6>Should I share my username?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    No. Please do not share any of your personal information to anyone (even us at Safe Haven), other than people you 100% trust. Your password is very important, but so is your username. Think about your username as the social security number for your crypto
                                    wallet. Sharing your username allows anyone to take a jab at breaking open your account. Since you cannot get locked out of your account for multiple failed logins, sharing your username makes you susceptible to
                                    hackers. Your username and password ARE you private keys.
                                </p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.3s">Fees</dt>
                            <dd>
                                <h6>What are your fees?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Safe Haven charges 1.5% when users buy into or sell out of a portfolio.
                                </p>
                                <h6>How about mining fees?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    Because we execute every transaction on chain, there will be small/variable mining fees associated to cover the cost of transactions. Mining fees do not go to Safe Haven.
                                </p>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.3s">Support</dt>
                            <dd>
                                <h6>How do I contact you?</h6>
                                <p style="text-align: justify;font-size: 13px;">
                                    We're fanatical about customer service. Contact us at support@safeHaven.com and we will get back to you quickly!
                                </p>
                            </dd>
                        </dl>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### FAQ & Timeline Area End ##### -->
</div>
@endsection