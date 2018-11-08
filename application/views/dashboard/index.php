<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-6">
                <h4 class="m-t-5"><i class="fa fa-home"></i> Dashboard</h4>
            </div>
        </div>
    </div>
</header>
<style>
    body{
        background-color: transparent;
    }
    /* ===== Card ====== */
    .card {
        box-shadow: 0 0 0 0;
        padding: 0px;
    }

    .card-block {
        padding: 1.25rem;
    }

    .outer{
        margin-top: 0;
    }

    .top_cards {
        border-radius: 6px;
        margin-top: 25px;
    }

    .top_cards .fa-stack {
        font-size: 30px;
        padding: 25px 60px;
    }

    .top_cards .cards_content {
        padding: 10px 5px 19px 0;
    }

    .cards_content .fa {
        margin-left: 10px;
    }

    .top_cards .number_val {
        font-size: 30px;
        font-weight: bolder;
    }

    .card_description {
        font-size: 18px;
        font-weight: bolder;
        line-height: 0;
    }

    .top_cards:hover .fa-stack-1x {
        transition: 0.2s;
        font-size: 1.3em;
        vertical-align: middle;
    }

    @media (min-width: 991px) and (max-width: 1222px) {
        .top_cards .fa-stack {
            padding: 15px 30px;
        }
    }
    @media (max-width: 350px) {
        .flot-x-axis div {
            font-size: 10px !important;
        }
    }

    /* ===== CHART ===== */
    .flotChart3 {
        width: 100%;
        height:302px;
        z-index: 1;
    }
    .flotChart4 {
        width: 100%;
        height:282px;
        z-index: 1;
        margin-top: -22px;
    }
    #toggle_real {
        margin-bottom: 0;
        z-index: 2;
        float: right;
    }
    #donut {
        height: 301px;
        width: 100%;
    }
    #area-chart .legend table{
        margin: -17px -10px 0 0;
    }
    #area-chart .legend>div{
        right: 1px !important;
    }
    .Browser_stats_ul {
        padding: 0 0 0 10px;
        font-size: 15px;
    }

    .Browser_stats_ul li {
        list-style: none;
    }

    .Browser_stats_ul hr {
        margin: 7px 0;
        border-bottom: 1px solid #eee;
    }

    .Browser_stats_ul img {
        height: 20px;
        width: 20px;
        margin-right: 15px;
    }
</style>

<div class="outer">
    <div class="inner bg-light lter bg-container">
        <div class="row">

            <div class="col-xl-6 col-lg-7 col-12">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div class="bg-success top_cards">
                            <div class="row icon_margin_left">
                                <div class="col-lg-5  col-5 icon_padd_left">
                                    <div class="float-left">
                                        <span class="fa-stack fa-sm">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-eye fa-stack-1x fa-inverse text-success visit_icon"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-7 icon_padd_right">
                                    <div class="float-right cards_content">
                                        <span class="number_val" id="visitors_count"></span>
                                        <i class="fa fa-long-arrow-up fa-2x"></i><br/>
                                        <span class="card_description">Visitors</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-12">
                        <div class="bg-primary top_cards">
                            <div class="row icon_margin_left">
                                <div class="col-lg-5 col-5 icon_padd_left">
                                    <div class="float-left">
                                        <span class="fa-stack fa-sm">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-users fa-stack-1x fa-inverse text-primary sales_hover"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-7 icon_padd_right">
                                    <div class="float-right cards_content">
                                        <span class="number_val" id="subscribers_count"></span>
                                        <i class="fa fa-long-arrow-down fa-2x"></i><br/>
                                        <span class="card_description">Subscribers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-12 m-t-25 md_align_section">
                <div class="card" style="padding: 10px;">
                    <div class="card-header bg-white" style="padding: 1px;"> This Month</div>
                    <div class="card-body">
                        <div class="task-item">
                            Visitors
                            <span class="float-right text-muted progress-warning">25%</span>
                            <div id="progress-bar21">
                                <div class="progress" id="progress-bar2">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="task-item">
                            Subscribers
                            <span class="float-right text-muted progress-primary">93%</span>
                            <div id="progress-bar5">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 93%" aria-valuenow="93"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-9 m-t-25">
                <div class="card">
                    <div class="card-header bg-white"> Statistics</div>
                    <div class="card-block m-t-35">
                        <div id="area-chart" class="flotChart3"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-12 m-t-35">
                <div class="card">
                    <div class="card-header bg-white"> Browsers Stats</div>
                    <div class="card-block">
                        <ul class="Browser_stats_ul">
                            <li>
                                <span><img alt="google" src="<?php echo base_url(); ?>public/img/chrome.png"/>Google Crome</span>
                                <span class="float-right text-mint">32% <i class="fa fa-level-up"></i></span><hr/>
                            </li>
                            <li>
                                <span><img alt="firebox" src="<?php echo base_url(); ?>public/img/firefox.png">Firefox</span>
                                <span class="float-right text-danger">5% <i class="fa fa-level-down"></i></span><hr/>
                            </li>
                            <li>
                                <span><img alt="safari" src="<?php echo base_url(); ?>public/img/safari2.png">Safari</span>
                                <span class="float-right text-mint">10% <i class="fa fa-level-up"></i></span><hr/>
                            </li>
                            <li>
                                <span><img alt="opera" src="<?php echo base_url(); ?>public/img/opera.png">Opera</span>
                                <span class="float-right text-mint">32% <i class="fa fa-level-up"></i></span><hr/>
                            </li>
                            <li>
                                <span><img alt="ie" src="<?php echo base_url(); ?>public/img/Ie.png">IE</span>
                                <span class="float-right text-danger">15% <i class="fa fa-level-down"></i></span><hr/>
                            </li>
                            <li>
                                <span><img alt="mobile" src="<?php echo base_url(); ?>public/img/mobile1.png">Mobile</span>
                                <span class="float-right text-mint">32% <i class="fa fa-level-up"></i></span><hr/>
                            </li>
                            <li>
                                <span><img alt="others" src="<?php echo base_url(); ?>public/img/others.png">Others</span>
                                <span class="float-right text-mint">32% <i class="fa fa-level-up"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>




    </div>
</div>
<script>
    $(document).ready(function() {
        var options = {
            useEasing: true,
            useGrouping: true,
            separator: ',',
            decimal: '.',
            prefix: '',
            suffix: ''
        };
        new CountUp("visitors_count", 0, 1700, 0, 2.5, options).start();
        new CountUp("subscribers_count", 0, 1020, 0, 2.5, options).start();

        var da1 = [["Jan", 80],["Feb", 100],["Mar", 95],["Apr", 105],["May", 80],["Jun", 95],["Jul", 80],["Aug", 90],["Sep", 115],["Oct", 90],["Nov", 85],["Dec", 90]];
        var da2 = [["Jan", 40],["Feb", 60],["Mar", 50],["Apr", 60],["May", 35],["Jun", 45],["Jul", 30],["Aug", 40],["Sep", 60],["Oct", 40],["Nov", 60],["Dec", 35]];
        $.plot("#area-chart", [{
            data: da1,
            label: "Views",
            color: "#69d3be"
        },{
            data: da2,
            label: "Subscribers",
            color: "#4FB7FE"
        }], {
            series: {
                lines: {
                    show: !0,
                    fill: .8,
                    fillColor: { colors: [{ opacity: 0.0 }, { opacity: 0.6}] }
                },
                points: {
                    show: !0,
                    radius: 3
                }
            },
            grid: {
                borderColor: "#fff",
                borderWidth: 1,
                hoverable: !0
            },
            tooltip: true,
            tooltipOpts: {
                content: "%y",
                defaultTheme: true
            },
            xaxis: {
                tickColor: "#eff",
                mode: "categories"
            },
            yaxis: {
                tickColor: "#eff"
            },
            shadowSize: 0
        });

        var progressBarContainer2 = $('#progress-bar2');
        var progressBar = {
            chain: [],
            progressBar: progressBarContainer2.find('.progress-bar'),
            progressInfo: progressBarContainer2.children('.progress-primary'),
            set: function(value, info, noPush) {
                if (!noPush) {
                    this.chain.push(value);
                }
                if (this.chain[0] == value) {
                    this.go(value, info);
                } else {
                    var self = this;
                    setTimeout(function() {
                        self.set(value, info, true)
                    }, 500);
                }
            },
            go: function(value, info) {
                this.progressInfo.text(info);
                var self = this;
                var interval = setInterval(function() {
                    var curr = self.progressBar.attr('aria-valuenow');
                    if (curr >= value) {
                        clearInterval(interval);
                        self.progressBar.attr('aria-valuenow', value);
                        self.progressBar.css('width', value + '%');
                        self.chain.shift()
                    } else {
                        self.progressBar.attr('aria-valuenow', ++curr);
                        self.progressBar.css('width', curr + '%');
                    }
                }, 10)
            }
        };
        progressBar.set(5);
        progressBar.set(12);
        progressBar.set(22);
        progressBar.set(52);
        progressBar.set(73);

        var progressBarContainer = $('#progress-bar5');
        var progressBar = {
            chain: [],
            progressBar: progressBarContainer.find('.progress-bar'),
            progressInfo: progressBarContainer.children('.progress-info'),
            set: function(value, info, noPush) {
                if (!noPush) {
                    this.chain.push(value);
                }
                if (this.chain[0] == value) {
                    this.go(value, info);
                } else {
                    var self = this;
                    setTimeout(function() {
                        self.set(value, info, true)
                    }, 500);
                }
            },
            go: function(value, info) {
                this.progressInfo.text(info);
                var self = this;
                var interval = setInterval(function() {
                    var curr = self.progressBar.attr('aria-valuenow');
                    if (curr >= value) {
                        clearInterval(interval);
                        self.progressBar.attr('aria-valuenow', value);
                        self.progressBar.css('width', value + '%');
                        self.chain.shift()
                    } else {
                        self.progressBar.attr('aria-valuenow', ++curr);
                        self.progressBar.css('width', curr + '%');
                    }
                }, 10)
            }
        };
        progressBar.set(5);
        progressBar.set(12);
        progressBar.set(42);
        progressBar.set(72);
        progressBar.set(93);
    });
</script>