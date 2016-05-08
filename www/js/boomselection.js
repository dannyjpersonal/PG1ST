var BoomSelection = function() {
	this.$error = $('.error');
	this.$now_playing = $('.now-playing');
	this.$current_show = $('.current-show');

	this.tick();
};

BoomSelection.prototype.tick = function() {
	var instance = this;

	console.log("TICK");

	this.updateNowPlaying();
	this.updateCurrentShow();

	setTimeout(function() {
		instance.tick();
	}, 5000);
};

BoomSelection.prototype.updateNowPlaying = function() {
	var instance = this;
	this.request("now-playing.php", {}, function(err, resp) {
		if(err || resp.status == "error")
			return instance.$error.html(err || resp.message);

		if(resp.status == "no-stream") {
			instance.$now_playing.html("WE ARE OFFLINE!")
			return;
		}

		instance.$now_playing.html(resp.track);
	});
};

BoomSelection.prototype.updateCurrentShow = function() {
	var instance = this;
	this.request("current-show.php", {}, function(err, resp) {
		if(err || resp.status == "error")
			return instance.$error.html(err || resp.message);

		if(typeof resp != 'object') {
			instance.$now_playing.html("WE ARE OFFLINE!")
			return;
		}

		instance.$current_show.find('img').attr('src', resp.dj.image);
		instance.$current_show.find('.dj').html(resp.dj.name);
		instance.$current_show.find('.info').html(resp.info);
		instance.$current_show.find('.show').html(resp.show);
	});
};

BoomSelection.prototype.request = function(endpoint, arguments, response) {
	var instance = this;

	$.ajax({
		url: endpoint,
		type: "GET",
		data: arguments,
		dataType: "json"
	}).done(function(respdata) {
		response(null, respdata);
	}).fail(function(xhr, status) {
		response(status, null);
	});
};

$(function() {
	new BoomSelection();
})