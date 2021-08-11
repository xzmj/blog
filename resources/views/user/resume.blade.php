{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    <!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <title>我的简历</title>
    <meta name="robots" content="index,follow"/>
    <link href={{ asset('css/resume.css') }} rel="stylesheet" type="text/css" media="screen" />
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css"/>

</head>
<body>

<!--header start-->
<header class="header">
    <div class="headerwrapper">
        <div class="avatar">
{{--            <img src="images/47840736.jpg"/>--}}
            <img src="data:image/jpeg;base64,
{{ base64_encode(@file_get_contents(url('images/47840736.jpg'))) }}">
        </div>
        <div class="name">
            <h1>李峻峰</h1>
            <div class="clearfix"></div>
            <h2>PHP程序开发</h2>
        </div>
    </div>
</header>
<div class="intro">
    <h5>Self-Introduction</h5>
    <div class="intro_con">
        <p>首先感谢您能在百忙之中抽出时间来查阅我的简历。</p>
        <p>
            我是一名技术爱好者，一个靠谱的技术开发人员、一个对代码有严格要求的程序员。有接近3年的后端PHP(主要是接口)开发经验，对PHP面向对象、laravel框架、TP5框架都有较深刻的理解，
            尤其是laravel框架，一直是开发项目的首选框架，对其核心思想、官方文档都比较熟悉。有几个项目已经成功上线稳定运行。本人
            可以独立完成中大型项目的需求整理、技术开发、部署上线等复杂的项目流程。在之前几年的技术生涯中，也一直在遵循着敏捷开发的思想、不断朝着敏捷开发的方向努力，希望能在以后的
            项目中实践更加标准的敏捷开发流程，快速开发项目，快速上线项目，提高项目的开发效率，为公司节省时间成本，节省人力成本。


        </p>
        <p>
            在之前的工作中，我作为一名技术开发人员。在开发过程中（最多时有4个后端、3个前端），我会把团队协作放在首要位置，也非常重视团队的整体实力，同时也会通过各种方法来弥补我在团队中的短板，只有团队的整体实力上去了，才能高效率高质量的完成项目。在项目的开发迭代过程中（公司4个内部项目、1个外部合作项目），技术总监会对项目的每个阶段进行进度把控，风险预测，我们也会对疑难问题尽快寻求对策，将项目延迟交付的风险降到最低。在以后的代码生涯中，我依然会不断地提升自己，深知技术无边界，学习无止境，技术在不断的更新迭代，我也要不断的去重新定位自己，拥抱新的技术，学习新的技术，努力不让自己成为团队的那个短板；同时也在寻求能有更多的机会去锻炼自己、提升自己的技能。也希望在不远的将来，能自己独当一面，为公司，为社会做一些更加有意义有价值的事，用技术来改变世界。</p>
    </div>
</div>

<!--header end-->


<!--wrapper start-->
<div id="wrapper">

    <!--contents start-->
    <section id="contents">
        <!--main start-->
        <div id="main">
            <!--section start-->
            <div class="section">
                <h5>Work Experience</h5>
                <!--work_item start-->
                <div class="work_item">
                    <div class="year">2019/3 - 2021/4</div>
                    <h3>PHP程序开发</h3>
                    <h6>四川智慧鲨人工智能有限公司</h6>
                    <div class="task">
                        <p>公司是隶属于杭州投着乐网络科技有限公司的子公司，为了拓展业务在绵阳成立的新公司，平时上班都是和杭州的同事线上协同工作</p>
{{--                        <p>负责公司后台技术人员的管理，承担项目经理角色， 把控项目开发进度、风险预测和开发人员的工作调度，保证项目按规定时间上线，定期codereview；</p>--}}
                        <p>负责参与公司产品线（APP、小程序、WEB、运营管理后台）的接口开发，以及各个产品线 代码的维护、优化等，保证项目按规定时间上线，定期参加codereview；</p>
{{--                        <p>负责公司服务器的管理，公司目前是4台服务器，一台是项目主服务器，一台是负载均衡服务器、一台是跑公司所有的定时任务、队列、缓存服务等， 每台服务器的维护和监控都由我来管理；</p>--}}
                        <p>同时参与公司的数据库管理和设计，每个迭代项目评审完成，都会进行技术评审，技术评审阶段会对数据库的结构进行设计，从中找到最优的方式。</p>
{{--                        <p>负责和数据团队进行对接，对爬取的数据进行结构化的整理和入库，并保证数据的定时和实时同步。</p>--}}
{{--                        <p>负责团队人员的统一协调、任务分配、人员管理、项目风险预测等管理的工作</p>--}}
                    </div>
                </div>


                <!--work_item start-->
                <div class="work_item">
                    <div class="year">2021/06- 2021/08</div>
                    <h3>PHP程序开发</h3>
                    <h6>成都升通达软件有限公司</h6>
                    <div class="task">
                        <p>负责公司内部管理系统开发</p>
                    </div>
                </div>
            </div>
            <!--section end-->
            <!--section start-->
            <div class="section">
                <h5>Project Experience</h5>

                <!--portfolio_item start-->

                <!--<div class="tag">Most Recent</div>-->








                <!--<div class="tag">Most Recent</div>-->







{{--                <div class="portfolio_item">--}}
{{--                    <div class="year">2016/10 - 2021/05</div>--}}
{{--                    <h3>微天使平台</h3>--}}
{{--                    <h6>IOS APP（杭州投着乐网络科技有限公司）</h6>--}}
{{--                    <p class="project_desc">--}}
{{--                        微天使App从开发到现在，历时1年半的时间，前期开发后端的工作主要是由我负责，后来技术团队扩大，由另外一个同事和我同时负责APP项目的后台开发。开发团队组成：IOS两人、后台两人、测试一人、UI一人、一个产品。--}}
{{--                        在开发APP项目的过程中，让我学习到接口返回值一致性的重要性，以及接口版本管理的重要性，同时也清晰的认识到一个迭代版本从需求评审到项目评审，再到设计评审，再到开发，再到版本回顾，整个流程每个阶段应该做什么，--}}
{{--                        注意什么。在这个项目中我的主要角色是负责接口的开发，以及人员的动态调度安排，和代码的不定期的codereview，数据的设计以及项目的上线等工作。<strong>用到的主要技术：前期后台框架是ThinkPHP5.0，后来经过调研以及和--}}
{{--                            技术负责人讨论确定后，改成Laravel框架，阿里云ECS服务器，LNMP服务器环境，Mysql数据库、Redis缓存、定时任务、队列。开发工具：PHPStorm</strong>--}}
{{--                    </p>--}}
{{--                </div>--}}
                <div class="portfolio_item">
                    <div class="year">2019/04 - 2021/04</div>
                    <h3>微天使乐投平台</h3>
                    <h6>微信小程序（杭州投着乐网络科技有限公司）</h6>
                    <p class="project_desc">
                       公司自己的产品线，我在进入公司后一直在参与该产品的迭代升级，后来随着技术团队的扩大，小程序迭代越来越快，现在已经是一个比较成熟的投融资平台。在整个项目开发过程中，我担任的主要是参与后台接口的开发。<strong>用的主要技术：后台框架laravel、LNMP服务器环境、redis、负载均衡，Mysql数据库。开发工具：PHPStorm</strong>
                    </p>
                    <p class="project_display">
{{--                        <img class="qrcode" src="images/wts.jpg">--}}
                        <img class="qrcode" src="data:image/jpeg;base64,
{{ base64_encode(@file_get_contents(url('images/wts.jpg'))) }}">
                    </p>
                </div>

                <div class="portfolio_item">
                    <div class="year">2019/04 - 2021/04</div>
                    <h3>投融资服务平台</h3>
                    <h6>WEB网站SASS平台（杭州投着乐网络科技有限公司）</h6>
                    <p class="project_desc">
                        此平台主要是针对项目方和投资人做的一个工作管理后台，用户可以进行项目的发布、查看项目、查看一些行为数据等等。后期由于公司业务转型，项目也开始朝着sass化转变，变成一个企业服务类型的项目，包括数据统一管理、小程序管理、数据大屏等核心模块。项目团队：前端3人、后端4人、测试一人、UI一人、一个产品。在这个项目中，
                        主要是参与数据库的设计、相关模块的接口开发，把控项目的风险，和项目经理共同解决一些技术难点，测试服代码的更新工作（前后端分离开发）。<strong>用到的主要技术：后台是laravel框架、跨域解决方案、Mysql数据库、Redis缓存、队列服务、
                            定时任务和数据实时同步的解决。开发工具：PHPStorm</strong>
                    </p>
                    <p class="project_display">
                        项目地址：<a href="https://www.weitianshi.cn">www.weitianshi.cn</a>
                    </p>
                </div>
                <div class="portfolio_item">
                    <div class="year">2019/04 - 2021/04</div>
                    <h3>管理后台</h3>
                    <h6 class="project_desc">CMS（杭州投着乐网络科技有限公司）</h6>

                    <p>
                        此项目没有用前后端分离的方式开发，用的主要框架是Laravel，使用blade模板引擎进行数据渲染。主要功能是公司的数据管理后台，将公司所有项目数据进行统一的管理，为公司运营人员日常运提供支持。我加入公司后一直在参与开发该后台的迭代更新工作
                    </p>
                </div>
                <div class="portfolio_item">
                    <div class="year">2019/04 - 2019/06</div>
                    <h3>大赛系统</h3>
                    <h6>WEB+小程序创业大赛系统（武汉软件学院）</h6>
                    <p class="project_desc">
                        此项目是公司中标的一套创业大赛管理系统，专门为智慧双创、融资路演等具有大赛性质的活动开发的一套集评委打分、实时大屏、管理员管理、项目管理等功能的系统。前期开发一个前端和一个后台，中期增加一个前端和一个后台（我）。在项目中主要负责参与数据库的设计、整个项目的接口开发，把控项目的风险，参与团队解决一些后端出现的疑难问题（前后端分离开发）。<strong>用到的主要技术：后台是laravel框架、跨域解决方案、Mysql数据库、Redis缓存、队列服务、
                            定时任务和数据实时同步的解决。开发工具：PHPStorm</strong>
                    </p>
                    <p class="project_display">
                        项目地址：<a href="https://www.wuruanchuangye.com/">www.wuruanchuangye.com/</a>
                    </p>
                </div>
                <div class="portfolio_item">
                    <div class="year">2019/06 - 2019/07</div>
                    <h3>VC-SASS管理系统</h3>
                    <h6>WEB+小程序（上海多鲸资本）</h6>
                    <p class="project_desc">
                        此系统是一个SASS系统，主要用来管理投资人、投资机构、用户、项目、项目排期、投资人跟踪等功能的系统，开发团队：两个前端、两个后台、一个产品、一个UI。在团队里主要参与项目开发的统筹规划、项目节点的把控和一些疑难问题的解决，参与后端代码的review和代码优化等工作。<strong>用到的主要技术：后台是laravel框架、跨域解决方案、Mysql数据库、Redis缓存、队列服务、
                            定时任务和数据实时同步的解决。开发工具：PHPStorm</strong>
                    </p>
                    <p class="project_display">
                        项目地址：<a href="https://fa-vc.weitianshi.cn">fa-vc.weitianshi.cn</a>
                    </p>
                </div>


            </div>
        </div>
        <aside id="sidebar">
            <div class="section">
                <h5>Contact Information</h5>

                <div class="contact_Info_items">
                    <ul>
                        <li class="web_icon"><a href="http://ljf.xzmj.top">个人博客：ljf.xzmj.top</a></li>

                        <li class="msg_icon">邮箱：1037985399@qq.com</li>

                        <li class="locate_icon">现住：成都市成华区</li>

                        <li class="pdf_icon"><a href={{ url('resume/pdf') }}>下载简历</a></li>

                    </ul>


                </div>
                <!--Contact_Info_items end-->

            </div>
            <!--section end-->


            <!--section start-->
            <div class="section">


                <h5>Education</h5>

                <!--education_items start-->
                <div class="education_items">
                    <h6 class="bold">成都航空职业技术学院</h6>
                    <p>模具 专科</p>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="section">
                <h5>Skills</h5>
                <div class="skills">
                    <ul>
                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>Linux</li>
                        <li>服务器</li>
                        <li>Mysql</li>
                        <li>Redis</li>
                    </ul>
                </div>
                <div class="skills">
                    <ul>

                        <li>Nodejs</li>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Javascript</li>
                        <li>小程序</li>

                    </ul>
                </div>
            </div>


            <div class="clearfix"></div>


            <div class="section">
                <h5>Languages</h5>
                <div class="languages">

                    <div class="skills">
                        <ul>
                            <li>English</li>
                            <li>普通话</li>
                        </ul>
                    </div>
                </div>
            </div>
{{--            <div class="section">--}}
{{--                <h5>Workplace Expectation</h5>--}}
{{--                <div class="references">--}}
{{--                    <h6 class="bold">成华区</h6>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="section">
                <h5>Salary Expectation</h5>
                <div class="references">
                    <h6 class="bold">8-10k</h6>
                </div>
            </div>
        </aside>
    </section>
</div>
</body>
</html>

{{--@endsection--}}