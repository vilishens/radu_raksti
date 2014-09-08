		<div class = "navbar navbar-inverse navbar-static-top">
                    <div class = "container">
			<a href = "#" class = "navbar-brand">{{ Lang::get('base.site_name') }}</a>
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
			</button>
			<div class = "collapse navbar-collapse navHeaderCollapse">
                            <ul class = "nav navbar-nav navbar-right">
				<li><a href = "{{ URL::route('home') }}">{{ Lang::get('base.menu_home') }}</a></li>
				<li class = "dropdown">
                                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">{{ Lang::get('base.menu_finance') }} <b class = "caret"></b></a>
                                    <ul class = "dropdown-menu">
					<li><a href="{{ URL::route('home') }}">{{ Lang::get('base.menu_expenses_monthly_of_year') }}</a></li>
					<li><a href="{{ URL::route('home') }}">{{ Lang::get('base.menu_expenses_monthly') }}</a></li>
                                    </ul>
                                </li>
				<li class = "dropdown">
                                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">{{ Lang::get('base.menu_health') }} <b class = "caret"></b></a>
                                    <ul class = "dropdown-menu">
                                        <li><a href="{{ URL::route('home') }}">{{ Lang::get('base.menu_weight_around_measure') }}</a></li>
                                    </ul>
				</li>
                                
                                @include('settings.base_log_in_out')

				<li><a href = "{{ URL::route('home') }}">{{ Lang::get('base.menu_about') }}</a></li>
				<li><a href = "{{ URL::route('home') }}">{{ Lang::get('base.menu_contacts') }}</a></li>
                            </ul>
			</div>
                    </div>
		</div>
