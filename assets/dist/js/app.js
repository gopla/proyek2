$(document).ready(function () {
	if (window.location.pathname.includes("admin/dashboard")) {
		$("#navDash").addClass("active");
	} else if (window.location.pathname.includes("admin/admin")) {
		$("#navAdmin").addClass("active");
	} else if (window.location.pathname.includes("admin/calon")) {
		$("#navCalon").addClass("active");
	} else if (window.location.pathname.includes("admin/pemilih")) {
		$("#navPemilih").addClass("active");
	} else if (window.location.pathname.includes("admin/hasil")) {
		$("#navHasil").addClass("active");
	}
});
