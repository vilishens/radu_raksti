		<div class = "navbar navbar-inverse navbar-static-top">
                    <div class = "container">
			<a href = "#" class = "navbar-brand">Viļa midzenītis</a>
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
			</button>
			<div class = "collapse navbar-collapse navHeaderCollapse">
                            <ul class = "nav navbar-nav navbar-right">
				<li><a href = "{{ URL::route('home') }}">Home</a></li>
				<li class = "dropdown">
                                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Finanses <b class = "caret"></b></a>
                                    <ul class = "dropdown-menu">
					<li><a href="{{ URL::route('home') }}">Izdevumi pa gada mēnešies</a></li>
					<li><a href="{{ URL::route('home') }}">Izdevumi pa mēnešies</a></li>
                                    </ul>
                                </li>
				<li class = "dropdown">
                                    <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">Veselība <b class = "caret"></b></a>
                                    <ul class = "dropdown-menu">
                                        <li><a href="{{ URL::route('home') }}">Svars-apkārtmērs</a></li>
                                    </ul>
				</li>
                                
                                <li><a href="#loginout" data-toggle="modal">Log In or Out</a></li>

				<li><a href = "{{ URL::route('home') }}">Par lapu</a></li>
				<li><a href = "{{ URL::route('home') }}">Kontaktinformācija</a></li>
                            </ul>
			</div>
                    </div>
		</div>
