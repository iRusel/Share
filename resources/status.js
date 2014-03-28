$(function() {
	if ($("#conversationStatusControls").length)
		$("#conversationBody .scrubberContent").prepend($("#conversationStatusControls").popup({
			alignment: "right",
			content: "<i class='icon-flag'></i> <span class='text'>" + T("Status") + "</span> <i class='icon-caret-down'></i>"
		}).find(".button").addClass("big").end());
});
