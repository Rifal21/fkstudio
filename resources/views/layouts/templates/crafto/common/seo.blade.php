<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="author" content="FKStudio" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="description" content="{{ $config['description'] }}" />
<meta name="keywords" content="{{ $config['keyword'] }}" />
<title>{{ isset($title) ? $title . ' - ' : '' }}{{ $config['name'] }}</title>
<link rel="shortcut icon" href="{{ cockpitImage($config['favicon']) }}" />
