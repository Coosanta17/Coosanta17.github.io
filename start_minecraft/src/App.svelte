<script>
	import fetch from "node-fetch";
	import https from "https";

	const token =
		"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjozLCJpYXQiOjE3MzMwMDc5ODIsInRva2VuX2lkIjoyfQ.5UgBEqmlhZPmNCYD0nY_UqCC1jgWRz7Wyxc1-cvScjs";
	const url =
		"https://101.178.53.7:25560/api/v2/servers/45433583-51ad-4625-b851-006f8006931b/action/start_server";

	const agent = new https.Agent({
		rejectUnauthorized: false,
	});

	async function startServer() {
		try {
			const response = await fetch(url, {
				method: "POST",
				headers: {
					Authorization: `Bearer ${token}`,
					"Content-Type": "application/json",
				},
				agent,
			});

			if (!response.ok) {
				throw new Error(`HTTP error! Status: ${response.status}`);
			}

			const data = await response.json();
			console.log("Server response:", data);
		} catch (error) {
			console.error("Error starting server:", error);
		}
	}

	startServer();
</script>

<main>
	<h1>Start Server!</h1>
	<button onclick={startServer}>Click Me!</button>
</main>
