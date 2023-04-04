<header class="clearfix second-style">

    <nav class="navbar navbar-expand-lg navbar-light bg-light px-1 py-0 p-md-0" style="min-height:90px">
        <div class="container">

            <a class="navbar-brand m-0 p-0" href="<?=base_url()?>">
                <img src="<?=base_url('assets')?>/images/logo.png" alt="" style="max-height:60px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url()?>">Home</a>
                    </li>
                    <li class="nav-item drop-link">
                        <a class="nav-link">Call for Papers<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="<?=base_url('call-for-papers')?>">Call for Papers</a></li>
                            <li><a href="<?=base_url('important-dates')?>">Important Dates</a></li>
                            <li><a href="<?=base_url('special-sessions')?>">Special Sessions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item drop-link">
                        <a class="nav-link">About Conference<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="<?=base_url('aim-and-theme')?>">Aim and Theme</a></li>
                            <li><a href="<?=base_url('patrons-and-conference-chairs')?>">Patrons and Conference Chairs</a></li>
                            <li><a href="<?=base_url('ieee-committees')?>">IEEE Oversight Committee</a></li>
                            <li><a href="<?=base_url('organizing-committees')?>">Committees</a></li>
                            <li><a href="<?=base_url('invited-speakers')?>">Invited Speakers</a></li>
                            <li><a href="<?=base_url('venue')?>">Venue</a></li>
                        </ul>
                    </li>
                    <li class="nav-item drop-link">
                        <a class="nav-link">For Attendees<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="<?=base_url('paper-submission')?>">Paper Submission</a></li>
                            <li><a href="<?=base_url('registration-fee-and-guidelines')?>">Registration Fee/Guidelines</a></li>
                            <li><a href="<?=base_url('conference-schedule')?>">Conference Schedule</a></li>
                            <li><a href="<?=base_url('conference-awards')?>">Conference Awards</a></li>
                            <li><a href="<?=base_url('conference-contact')?>">Conference Contact</a></li>
                        </ul>
                    </li>
                    <li class="nav-item d-none">
                        <a class="nav-link">News</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
<section class="marquee" style="background:#002e46;">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col">
                <marquee class="py-1 pt-2">
					<a href="https://easychair.org/conferences/?conf=iciera2024" target="_blank" style="font-size:18px;"><span class="blinker">Paper submission is open now. Click here to submit
                            paper.</span></a>
				</marquee>
            </div>
        </div>
    </div>
</section>
<!-- End Header -->