<div class="nicescroll sidebar-expanded sidebar-wrapper" style="overflow: hidden; outline: none;" tabindex="2">
	<div class="header-logo">
		<a id="logo">
			<svg width="36" height="36" id="tanuki-logo">
				<path id="tanuki-right-ear" class="tanuki-shape" fill="#e24329" d="M2 14l9.38 9v-9l-4-12.28c-.205-.632-1.176-.632-1.38 0z"></path>
				<path id="tanuki-left-ear" class="tanuki-shape" fill="#e24329" d="M34 14l-9.38 9v-9l4-12.28c.205-.632 1.176-.632 1.38 0z"></path>
				<path id="tanuki-nose" class="tanuki-shape" fill="#e24329" d="M18,34.38 3,14 33,14 Z"></path>
				<path id="tanuki-right-eye" class="tanuki-shape" fill="#fc6d26" d="M18,34.38 11.38,14 2,14 6,25Z"></path>
				<path id="tanuki-left-eye" class="tanuki-shape" fill="#fc6d26" d="M18,34.38 24.62,14 34,14 30,25Z"></path>
				<path id="tanuki-right-cheek" class="tanuki-shape" fill="#fca326" d="M2 14L.1 20.16c-.18.565 0 1.2.5 1.56l17.42 12.66z"></path>
				<path id="tanuki-left-cheek" class="tanuki-shape" fill="#fca326" d="M34 14l1.9 6.16c.18.565 0 1.2-.5 1.56L18 34.38z"></path>
			</svg>

		</a>
		<a class="gitlab-text-container-link" title="Dashboard" id="js-shortcuts-home" href="/"><div class="gitlab-text-container">
			<h3>depinfo</h3>
		</div>
	</a></div>
	<ul class="nav nav-sidebar">
		<li class="home <?= $PAGE=='accueil' ? 'active' : '' ?>"><a title="Projects" href="/"><i class="fa fa-bookmark fa-fw"></i>
			<span>Accueil</span>
		</a></li>
		<li class="separate-item"></li>
		<li class=" <?= $PAGE=='messages' ? 'active' : '' ?>"><a title="Todos" href="/messages"><i class="fa fa-bell fa-fw"></i>
			<span>Messages<span class="count todos-pending-count">0</span></span>
		</a></li>
		<li class="<?= $PAGE=='commandes' ? 'active' : '' ?>"><a title="Issues" class="shortcuts-issues" href="/commandes"><i class="fa fa-exclamation-circle fa-fw"></i>
			<span>Commandes<span class="count">14</span></span>
		</a></li>
		<li class="<?= $PAGE=='catalogue' ? 'active' : '' ?>"><a title="Merge Requests" class="shortcuts-merge_requests" href="/catalogue"><i class="fa fa-tasks fa-fw"></i>
			<span>Catalogue<span class="count">0</span></span>
		</a></li>
		<li class="<?= $PAGE=='livraison' ? 'active' : '' ?>"><a title="Snippets" href="/livraison"><i class="fa fa-clipboard fa-fw"></i>
			<span>Livraison</span>
		</a></li>
		<li class="<?= $PAGE=='suivi' ? 'active' : '' ?>"><a title="Help" href="/suivi"><i class="fa fa-question-circle fa-fw"></i>
			<span>Suivi</span>
		</a></li>
		<li class="separate-item"></li>
		<li class="<?= $PAGE=='historique' ? 'active' : '' ?>"><a title="Milestones" href="/historique"><i class="fa fa-clock-o fa-fw"></i>
			<span>Historique</span>
		</a></li>
		<li class="<?= $PAGE=='budget' ? 'active' : '' ?>"><a class="shortcuts-activity" title="Activity" href="/budget"><i class="fa fa-dashboard fa-fw"></i>
			<span>Budget</span>
		</a></li>
		<li class="<?= $PAGE=='utilisateurs' ? 'active' : '' ?>"><a title="Groups" href="/utilisateurs"><i class="fa fa-group fa-fw"></i>
			<span>Utilisateurs</span>
		</a></li>
		<li class="separate-item"></li>
		<li class="<?= $PAGE=='mon-profil' ? 'active' : '' ?>"><a title="Profile Settings" data-placement="bottom" href="/mon-profil"><i class="fa fa-user fa-fw"></i>
			<span>Mon profil</span>
		</a></li>
	</ul>

	<div class="collapse-nav">
		<a class="toggle-nav-collapse" title="Open/Close" href="#"><i class="fa fa-angle-left"></i></a>
	</div>

	<a class="sidebar-user" title="Profile" href="/utilisateurs?u=jfellus"><img alt="Profile" class="avatar avatar s36" src="">
		<div class="username">jfellus</div>
	</a>
</div>
