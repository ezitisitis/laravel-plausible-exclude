<html class="h-full dark" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Plausible Analytics · Exclusion</title>
<link rel="stylesheet" type="text/css" href="plausible-exclusion.css">
</head>

<body class="flex flex-col h-full bg-gray-100 dark:bg-gray-900 items-center">
	<div class="container text-center mt-24">
		<h1 class="text-5xl font-black dark:text-gray-100">Plausible Exclude</h1>
		<div class="my-4 text-xl dark:text-gray-100">Click the button below to toggle your exclusion in analytics for this
			site</div>
		<div class="my-4 text-xl dark:text-gray-100">You currently <span class="dark:text-red-400 text-red-600 font-bold"
				id="plausible_not">are not</span><span class="dark:text-green-400 text-green-600 font-bold hidden" id="plausible_yes">are</span>
			excluding your visits.</div>
		<a class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"
			id="plausible_button" href="javascript:toggleExclusion()">Exclude my visits</a>
	</div>

	<script>
		window.addEventListener('load', function (e) {
			var exclusionState = window.localStorage.plausible_ignore == "true"

			if (exclusionState) {
				document.getElementById("plausible_not").classList.add('hidden')
				document.getElementById("plausible_yes").classList.remove('hidden')
				document.getElementById("plausible_button").innerHTML = 'Stop excluding my visits'
			} else {
				document.getElementById("plausible_yes").classList.add('hidden')
				document.getElementById("plausible_not").classList.remove('hidden')
				document.getElementById("plausible_button").innerHTML = 'Exclude my visits'
			}
		});

		function toggleExclusion(e) {
			var exclusionState = window.localStorage.plausible_ignore == "true"

			if (exclusionState) {
				delete window.localStorage.plausible_ignore
				document.getElementById("plausible_yes").classList.add('hidden')
				document.getElementById("plausible_not").classList.remove('hidden')
				document.getElementById("plausible_button").innerHTML = 'Exclude my visits'
			} else {
				window.localStorage.plausible_ignore = "true"
				document.getElementById("plausible_not").classList.add('hidden')
				document.getElementById("plausible_yes").classList.remove('hidden')
				document.getElementById("plausible_button").innerHTML = 'Stop excluding my visits'
			}
		}
	</script>
</body>

</html>
