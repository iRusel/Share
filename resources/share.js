$(function() {
	if ($("#shareControls").length)
		$("#conversationBody .scrubberContent").prepend($("#shareControls").popup({
			alignment: "right",
			class: "share",
			content: "<i class='icon-heart'></i> <span class='text'>" + T("Share") + "</span> <i class='icon-caret-down'></i>"
		}).find(".button").addClass("big").end());
});
