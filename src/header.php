<header class="navbar navbar-fixed-top navbar-gitlab header-expanded">
	<div class="container-fluid">
		<div class="header-content">
			<button class="navbar-toggle" type="button">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="hidden-sm hidden-xs">
						<div class="search search-form">
							<form class="navbar-form" action="https://promethe.u-cergy.fr/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
								<div class="search-input-container">
									<div class="search-location-badge"></div>
									<div class="search-input-wrap">
										<div class="dropdown" data-url="/search/autocomplete">
											<input type="search" name="search" id="search" placeholder="Rechercher" class="search-input dropdown-menu-toggle disabled" spellcheck="false" tabindex="1" autocomplete="off" data-toggle="dropdown" value="">
											<div class="dropdown-menu dropdown-select">
												<div class="dropdown-content">
													<ul>
														<li><a class="is-focused dropdown-menu-empty-link">Loading...</a></li>
													</ul>
												</div>
												<div class="dropdown-loading"><i class="fa fa-spinner fa-spin"></i></div>
											</div>
											<i class="search-icon"></i>
											<i class="clear-icon js-clear-input"></i>
										</div>
									</div>
								</div>
								<input type="hidden" name="group_id" id="group_id" value="">
								<input type="hidden" name="project_id" id="search_project_id" value="">
								<input type="hidden" name="repository_ref" id="repository_ref" value="">

								<div class="search-autocomplete-opts hide" data-autocomplete-path="/search/autocomplete"></div>
							</form>
						</div>
					</li>

					<li class="hidden-sm hidden-xs">
						<div class="search search-form">
							<form class="navbar-form" action="https://promethe.u-cergy.fr/search" accept-charset="UTF-8" method="get" style="width: 103px;">
								<input name="utf8" type="hidden" value="✓">
								<div class="search-input-container">
									<div class="search-location-badge"></div>
									<div class="search-input-wrap">
										<div class="dropdown" data-url="/search/autocomplete">
											<input type="search" name="d" id="search" placeholder="Année" class="search-input dropdown-menu-toggle disabled" spellcheck="false" tabindex="1" autocomplete="off" data-toggle="dropdown" value="">
											<div class="dropdown-menu dropdown-select">
												<div class="dropdown-content">
													<ul>
														<li>
															<a class="is-focused dropdown-menu-empty-link">Loading...</a>
														</li>
													</ul>
												</div>
												<div class="dropdown-loading"><i class="fa fa-spinner fa-spin"></i></div>
											</div>
											<i class="search-icon"></i>
											<i class="clear-icon js-clear-input"></i>
										</div>
									</div>
								</div>
								<input type="hidden" name="group_id" id="group_id">
								<input type="hidden" name="project_id" id="search_project_id" value="">
								<input type="hidden" name="repository_ref" id="repository_ref">

								<div class="search-autocomplete-opts hide" data-autocomplete-path="/search/autocomplete"></div>
							</form>
						</div>
					</li>

					<li class="visible-sm visible-xs">
						<a title="Search" href="#">
							<i class="fa fa-search"></i>
						</a>
					</li>

					<li id="toolbuttons-placeholder"></li>

					<li>
						<a class="logout" rel="nofollow" href="javascript:logout();"><i class="fa fa-sign-out"></i></a>
					</li>
				</ul>
			</div>

			<h1 class="title"><a href="/<?= $PAGE ?>"><?= ucfirst($PAGE) ?></a></h1>

		</div>
	</div>
</header>
