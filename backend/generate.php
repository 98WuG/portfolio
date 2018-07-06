<?php

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

// Generate content if class "list"
function listContent($content) {
	$div = "<div class=\"row list\">";
	$div .= $content;
	$div .= "</div>";
	$div .= "</section>";
	$div .= "<hr class=\"my-5\">";
	return $div;
}

// Generate sections from entries
function sectionEntry($id, $content) {
	$table = "sections";
	$div = "<section id=\"" . queryData("htmlID", $table, $id) . "\" class=\"text-center\">";
	$div .= "<h2 class=\"mb-2 font-weight-bold\">" . queryData("title", $table, $id). "</h2>";
	$div .= "<div class=\"row d-flex justify-content-center mb-3\">";
	$div .= "<div class=\"col-md-8\">";
	$div .= "<p class=\"subtitle grey-text\">" . queryData("subtitle", $table, $id) . "</i></p>";
	$div .= "</div>";
	$div .= "</div>";
	$div .= $content;
	return $div;
}

?>
