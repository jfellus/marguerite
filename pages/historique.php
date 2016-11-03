<!-- <ul class="nav-links">
<li class="active"><a class="shortcuts-activity" data-placement="right" href="https://promethe.u-cergy.fr/dashboard/activity">Your Projects</a></li>
<li><a data-placement="right" href="https://promethe.u-cergy.fr/dashboard/activity?filter=starred">Starred Projects</a></li>
</ul> -->

<section class="activities">

	<div class="hidden-xs"></div>

	<div class="nav-block">
		<div class="controls">
			<a class="btn rss-btn" href="https://promethe.u-cergy.fr/dashboard/projects.atom?private_token=qCs2KoszcPQA5yQ3R7Py"><i class="fa">x</i></a>
		</div>
		<ul class="nav-links event-filter">
			<li><a class="event-filter-link" id="push_event_filter" title="Filter by push events" href="https://promethe.u-cergy.fr/dashboard/activity"><span>Devis</span></a></li>
			<li><a class="event-filter-link" id="merged_event_filter" title="Filter by merge events" href="https://promethe.u-cergy.fr/dashboard/activity"><span>Commandes</span></a></li>
			<li><a class="event-filter-link" id="comments_event_filter" title="Filter by comments" href="https://promethe.u-cergy.fr/dashboard/activity"><span>Livraisons</span></a></li>
			<li><a class="event-filter-link" id="team_event_filter" title="Filter by team" href="https://promethe.u-cergy.fr/dashboard/activity"><span>Utilisateurs</span></a></li>
			<li><a class="event-filter-link" id="team_event_filter" title="Filter by team" href="https://promethe.u-cergy.fr/dashboard/activity"><span>Budget</span></a></li>
		</ul>
	</div>


	<div class="content_list">

<?php for($i=0; $i<50; $i++) { ?>

		<div class="event-block event-item">
			<div class="event-item-timestamp">
				<time class="time_ago js-timeago" datetime="2016-07-11T08:30:00Z" title="" data-toggle="tooltip" data-placement="top" data-container="body" data-original-title="Jul 11, 2016 10:30am GMT+0200">4 months ago</time><script>
				//<![CDATA[
				$('.js-timeago-pending').removeClass('js-timeago-pending').timeago()
				//]]>
				</script>
			</div>
			<img class="avatar s40" alt="" src="./marguerite_files/9aea2b59a687d7452ade20e4c3830792">
			<div class="event-title">
				<span class="author_name"><a title="Vincent Wartelle" href="https://promethe.u-cergy.fr/u/vincwart">Vincent Wartelle</a></span>
				<span class="event_label">commented on <a href="https://promethe.u-cergy.fr/promethe/compiler/issues/2#note_196">issue #2</a> at	</span><a title="compiler" href="https://promethe.u-cergy.fr/promethe/compiler"><span class="namespace-name">promethe / </span><span class="project-name">compiler</span></a>
			</div>
			<div class="event-body">
				<div class="event-note">
					<div class="md">
						<p>Ok, I was not aware of this script "install_tmp.sh"  in promethe repository....</p>
					</div>
				</div>
			</div>

		</div>
		<?php } ?>

	</div>

	<div class="loading hide" style="display: none;"><i class="fa fa-spinner fa-spin"></i></div>

</section>
