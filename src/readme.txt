=== Plugin Name ===
Contributors: Brownoxford
Donate link: @author_uri@donate/
Tags: access, posts, pages, restrict, admin, user, members
Requires at least: 2.6
Tested up to: 2.6.2
Stable tag: 0.1

@plugin_description@

== Description ==

**Please Note**: *This plugin is in testing status. It will not corrupt your data, but it may not display everything as you expect. Please take it for a spin, all feedback is welcome and can be submitted [here](@author_uri@contact/ "Send Feedback")*

@plugin_name@ allows a WordPress administrator to make individual posts and pages accessible only to logged-in members. @plugin_name@ allows global configuration so that all posts or pages can be viewable by everyone (the default) or only by members, and it also allows each post and page to override the global setting.

WordPress pages which display multiple posts, such as search results, archives and RSS feeds, can be configured to either omit entirely content that is only available to members or to include an excerpt for that content to entice non-members to sign-up.

Template developers can take advantage of the `members_access_is_private` template tag to make custom template modifications to further configure the display of content that is viewable only to members.

Non-members can be redirected to the WordPress login page, or to a page of the administrators choosing, when they access content intended for members. Redirection can also be configured to occur if generated archive or search result pages contain only member content.

More info:

* [@plugin_name@](@plugin_uri@ "@plugin_name@") plugin.
* Check out the other [WordPress plugins](@author_uri@wordpress-plugins/ "Other WordPress Plugins by @author_name@") by the same author.

== Installation ==

Installing @plugin_name@ is easy:

* Download and unzip the plugin.
* Copy the @plugin_label@ folder to the plugins directory of your blog.
* Enable the plugin in your admin panel.
* An options panel will appear under Plugins.
* Choose the settings you want.

== Screenshots ==

1. This screenshot shows the @plugin_name@ options screen.
2. This screenshot shows the Write Post interface where global settings can be overridden for a single post.
3. This screenshot is from the Manage Posts interface. The 'Visibility' column shows the visibility status for each listed post.

== Template Developers ==

This plugin provides the template tag `member_access_is_private()` that can be used to determine whether or not a post should be visible only to members. You can use this tag in your templates to add custom styles to posts that are not available to the general public. For example:

`<?php if (have_posts()): while (have_posts()): the_post() ?>
    <?php if (function_exists(member_access_is_private) && member_access_is_private(get_the_ID())): ?>
    <div class="members-only">
    <?endif;?>
        <h1 class="post_title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php if (function_exists(member_access_is_private) && member_access_is_private(get_the_ID())): ?>
    </div>
    <?endif;?>
<?php endwhile; endif; ?>`

You should also keep in mind that calls to `the_content()` from within the loop may instead function as though `the_excerpt()` was called if the administrator has configured the plugin to show excerpts for nonpubluc content.

== More Information ==

* For more info, version history, etc. check out the page on my site about the [@plugin_name@ plugin](@plugin_uri@ "@plugin_name@"). 
* To check out the other WordPress plugins I wrote, visit my [WordPress plugins](@author_uri@wordpress-plugins/ "Other WordPress Plugins by @author_name@") page.
* For updates about this plugin and the other plugins that I maintain, read my [consulting blog](@author_uri@ "@author_name@")