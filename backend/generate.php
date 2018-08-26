<?php

// Captcha
$ini_array = parse_ini_file("backend/config.ini");
$publickey = $ini_array["publickey"];

// Generate entries for About Me section
function aboutMeEntry($id) {
	$table = "aboutme";
	$div = "<div class=\"col-md-4 mb-1\">";
	$div .= "<i class=\"fa fa-" . queryData("icon", $table, $id) . " fa-4x blue-text\"></i>";
	$div .= "<h4 class=\"mt-4 font-weight-bold\">" . queryData("title", $table, $id) . "</h4>";
	$div .= "<h6 class=\"grey-text\">" . queryData("subtitle", $table, $id) . "</h6>";
	$div .= "<p>" . queryData("description", $table, $id) . "</p>";
	$div .= "</div>";
	return $div;
}

// Generate entries for Projects section
function projectEntry($id) {
	$table = "projects";
	$div = "<div class=\"col-lg-" . queryData("lg", $table, $id) . " col-md-" . queryData("md", $table, $id) . " mb-4\">";
	$div .= "<div class=\"view-overlay z-depth-1-half\">";
	$div .= "<a href=\"" . queryData("url", $table, $id) . "\">";
	$div .= "<img src=\"./images/" . queryData("image", $table, $id) . "\" class=\"img-fluid\" alt=\"\">";
	$div .= "</a>";
	$div .= "</div>";
	$div .= "<h4 class=\"mt-4 font-weight-bold\">" . queryData("title", $table, $id) . "</h4>";
	$div .= "<h6 class=\"grey-text\">" . queryData("subtitle", $table, $id) . "</h6>";
	$div .= "<p>" . queryData("description", $table, $id) . "</p>";
	$div .= "</div>";
	return $div;
}

// Generate self-hosted fields
function selfEntry($id) {
	$table = "self";
	$div = "<div class=\"col-lg-4 offset-lg-2 col-md-6 text-center mb-4\">";
	$div .= "<div class=\"view overlay z-depth-2 zoom\">";
	$div .= "<img src=\"" . queryData("picture", $table, $id) . "\" class=\"img-fluid hoverable\" alt=\"blog\">";
	$div .= "<a href=\"" . queryData("link", $table, $id) . "\">";
	$div .= "<div class=\"mask flex-center waves-effect waves-light rgba-white-slight\">";
	$div .= "<p class=\"white-text\">Open in new tab</p>";
	$div .= "</div>";
	$div .= "</a>";
	$div .= "</div>";
	$div .= "</div>";
	$div .= "<div class=\"col-lg-4 col-md-6 text-left my-auto self-desc\" onmouseover=\"\"\">";
	$div .= "<h4 class=\"font-weight-bold h4-responsive\">" . queryData("title", $table, $id). "</h4>";
	$div .= "<h6 class=\"grey-text\">" . queryData("subtitle", $table, $id) . "</h6>";
	$div .= "<p>" . queryData("description", $table, $id) . "</p>";
	$div .= "</div>";
	return $div;
}

// Generate contact form fields
function contactEntry($id) {
	$table = "form";
	$div = "<div class=\"md-form form-sm\"> <i class=\"fa fa-" . queryData("icon", $table, $id) . " prefix grey-text\"></i>";
	$div .= "<input type=\"" . queryData("type", $table, $id) . "\" id=\"" . queryData("htmlID", $table, $id) . "\" class=\"form-control form-control-sm\" required />";
	$div .= "<label for=\"" . queryData("htmlID", $table, $id) . "\">" . queryData("label", $table, $id) . "</label>";
	$div .= "</div>";
	return $div;
}

// Generate content if class "list"
function listContent($content) {
	$div = "<div class=\"row list\">";
	$div .= $content;
	$div .= "</div>";
	$div .= "</section>";
	$div .= "<hr class=\"my-5\">";
	return $div;
}

// Generate content if not "list"
function sectionContent($content) {
	$div = "<div class=\"row\">";
	$div .= $content;
	$div .= "</div>";
	$div .= "</section>";
	$div .= "<hr class=\"my-5\">";
	return $div;
}

// Generate content if contact form
function formContent($content) {
	global $publickey;
	$div = "<div class=\"col-lg-9 mx-auto col-md-12 mb-5\">";
	$div .= "<form action=\"javascript:email()\">";
	$div .= $content;
	$div .= "<div class=\"md-form form-sm\"> <i class=\"fa fa-pencil prefix grey-text\"></i>";
	$div .= "<textarea type=\"text\" id=\"message\" class=\"md-textarea form-control form-control-sm\" rows=\"4\" required></textarea>";
	$div .= "<label for=\"message\">Message</label>";
	$div .= "</div>";
	$div .= "<center>";
	$div .= "<div class=\"g-recaptcha\" data-sitekey=\"$publickey\"></div>";
	$div .= "</center>";
	$div .= "<div class=\"text-center mt-2\">";
	$div .= "<button type=\"submit\" class=\"btn btn-primary\" id=\"send-button\">Send <i class=\"fa fa-paper-plane-o ml-1\"></i></button>";
	$div .= "</div>";
	$div .= "</form>";
	$div .= "</div>";
	return $div;
}

// Generate sections from entries
function sectionEntry($id, $content, $center) {
	$table = "sections";
	if($center) {
		$div = "<section id=\"" . queryData("htmlID", $table, $id) . "\" class=\"text-center\">";
	} else {
		$div = "<section id=\"" . queryData("htmlID", $table, $id) . "\">";
	}
	$div .= "<h2 class=\"mb-2 font-weight-bold title\">" . queryData("title", $table, $id). "</h2>";
	$div .= "<div class=\"row d-flex justify-content-center mb-3\">";
	$div .= "<div class=\"col-md-8\">";
	$div .= "<p class=\"subtitle grey-text\">" . queryData("subtitle", $table, $id) . "</i></p>";
	$div .= "</div>";
	$div .= "</div>";
	$div .= $content;
	return $div;
}

?>
