$('#calendar').fullCalendar({
	header: {
		left: 'prev,next today',
		center: 'title',
		right: 'month,agendaWeek,agendaDay'
	},
	year: 2010,
	month: 0, // January
	editable: true,

    // JSON FEED INSTRUCTIONS
    //
    // 1. create a new Gist at https://gist.github.com/
    //
    // 2. name the file "fiddle.response.json"
    //
    // 3. paste in your JSON
    //
    // 4. save by clicking "Create Public Gist"
    //
    // 5. look at the URL of the new Gist to get the ID
    //    https://gist.github.com/arshaw/6218404
    //    => 6218404
    //
    // 6. the URL for accessing your JSON from jsFiddle will be:
    //    /gh/gist/response.json/{ID}/
    //
    events: '/gh/gist/response.json/6218404/'

    // IF YOU WANT TO MODIFY YOUR GIST AFTERWARDS...
    //
    // You might not see your changes reflected right away because
    // jsFiddle caches the JSON feed data. You can either wait a
    // few minutes or create a brand new Gist.
    //
    // Don't forget, the Networking panel in Firebug/Inspector is
    // your friend.
});
