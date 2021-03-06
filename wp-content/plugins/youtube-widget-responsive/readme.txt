=== Youtube Widget Responsive ===
Contributors: stefanoai
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=stefanoai%40stefanoai%2ecom&lc=IS&item_name=StefanoAI&no_note=0&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHostedGuest
Tags: youtube, responsive, widget, autoplay, YouTube embed, YouTube plugin, embed youtube, embedding youtube, no-cookie, youtube plugin, sidebar, simple youtube, annotations, wordpress youtube widget, wordpress youtube embed, video plugin, video widget, shortcode youtube, shortcode
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 0.9
License: GPLv2 or later

Widgets + ShortCode responsive to embed youtube in your sidebar or in your content [youtube video=...], with all available options.

== Description ==

Widgets + ShortCode responsive to embed youtube in your sidebar or in your content [youtube video=...], with all available options.
Among the various options you can choose:
<ul>
<li>- Choosing minutes and seconds of the start and end of the video</li>
<li>- Automatically subtitles On/Off</li>
<li>- Auto hide video progress bar</li>
<li>- Choose theme of controls bar</li>
<li>- Choose color of progress bar</li>
<li>- Show controls bar or not</li>
<li>- Enable fullscreen On/Off</li>
<li>- Automatically start video On/Off</li>
<li>- Hide YouTube logo On/Off</li>
<li>- Hide title On/Off</li>
<li>- Enabling Privacy Mode On/Off</li>
<li>- Enable the suggested videos at the end of playback On/Off</li>
<li>- Can be set max-width</li>
</ul>
Languages: EN, IT, AR, DE, ES, FR, HE, HI, RU, ZH, PT (thanks to Amlugil, quadbox, Ksenia, Dietz, Daniel Severo Estrázulas and google Translate)

== Installation ==

Upload the Youtube Widget Responsive plugin to your blog, Activate it, Add in your sidebar from Widgets OR put in the content [youtube video=link_youtube].

You're done!

== Frequently Asked Questions ==

= What should I put in the video field? =

You can put the link of youtube like 

"http://www.youtube.com/watch?v=_9tBFVKhn5o"

or only the id of video like

_9tBFVKhn5o

= I would like to report a bug or help with the translation for my language, how can I do that? =

Simple, just write an email to stefanoai@stefanoai.com

For the translation, just write in the mail these phrases translated in brackets

title [title in your language]

video [video in your language]

Start from [Start... in your language]

End to [end to in your language]

minute [minute in your language]

second [second in your language]

Enable substitles automatically [Enable... in your language]

language [language in your language]

Auto hide Video progress bar [Auto hide... in your language]

Theme of conotrol bar [Theme of... in your language]

Select color of progress bar [Select color... in your language]

Show controls bar [Show controls... in your language]

Allow fullscreen [Allow... in your language]

Disable the player keyboard controls [Disable the... in your language]

Hide video annotations [Hide video... in your language]

Start video automatically [Start... in your language]

Hide YouTube logo on controls bar [Hide YouTube... in your language]

Hide the video title and uploader before the video starts playing [Hide the video... in your language]

Enable privacy-enhanced mode [Enable... in your language]

Show suggested videos show When the video finishes [Suggested... in your language]

YouTube Responsive enable you to place a widget with youtube video. Among the various options there is Also The Possibility to start the video automatically [YouTube... in your language]

Thank you.

= I can make a donation to help keep the software up to date? =
Sure just press <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=stefanoai%40stefanoai%2ecom&lc=IS&item_name=StefanoAI&no_note=0&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHostedGuest">here</a>

Thank you so much.


== Screenshots ==

1. The Widget.
2. The widget on sidebar auto resized 

== Changelog ==

= 0.9 =
* Added support for youtube.be
* Added Portuguese - Brazil language

= 0.8 =
* Added support for playlist
* Fixed responsive for padding in parent object

= 0.7 =
* Updated German language
* Updated Russian language
* Updated Hebrew language

= 0.6 =
* Update German language
* Added w3c option
* Added filter youtube_iframe on iframe src.


= 0.5 =
* Added shortcode [youtube video=_9tBFVKhn5o]
* Added new options
* Added new language and translated dropdown menu

= 0.4 =
* Added new options

= 0.2 =
* Removed 'namespace' (PHP 5.3 is no longer required)
* added enqueue_script for jQuery
* moved responsive js on wp_footer

= 0.1 =
* Welcome



== ShortCode Params ==
<ul>
    <li><strong>video</strong> (required)
        <ul>
            <li>The link at the video 
                "http://www.youtube.com/watch?v=_9tBFVKhn5o"
                or link to playlist like
                "https://www.youtube.com/watch?v=KQ6zr6kCPj8&list=PLatuTuqWSQmViIeVthG2y9YssDtm8EvYt"
                or only the id of video like
                _9tBFVKhn5o
            </li>
        </ul>
    </li>
    <li><strong>list</strong> (supported players: AS3, HTML5)
        <ul>
            <li>
    <p>The list value of link (you can put entire url on video without use this param)</p>
            </li>
        </ul>
    </li>
    <li><strong>autohide</strong> (supported players: AS3, HTML5)
        <ul>
            <li>
    <p>Values: 2 (default), 1, and 0. This parameter indicates whether the video controls will automatically hide after a video begins playing. The default behavior (autohide=2) is for the video progress bar to fade out while the player controls (play button, volume control, etc.) remain visible.</p>

    <p>If this parameter is set to 1, then the video progress bar and the player controls will slide out of view a couple of seconds after the video starts playing. They will only reappear if the user moves her mouse over the video player or presses a key on her keyboard.
    If this parameter is set to 0, the video progress bar and the video player controls will be visible throughout the video and in fullscreen.</p>
            </li>
        </ul>
    </li>
    <li><strong>autoplay</strong> (supported players: AS3, HTML5)
        <ul>
            <li>
    <p>Values: 0 or 1. Default is 0. Sets whether or not the initial video will autoplay when the player loads.</p>
            </li>
        </ul>
    </li>
    <li><strong>cc_load</strong> (supported players: AS3)
        <ul>
            <li>
    <p>Values: 1. Default is based on user preference. Setting to 1 will cause closed captions to be shown by default, even if the user has turned captions off.</p>
            </li>
        </ul>
    </li>
    <li><strong>cc_lang</strong> (supported players: AS3)
        <ul>
            <li>
    <p>ISO 639-1 two-letter language code [ex. en]</p>
            </li>
        </ul>
    </li>
    <li><strong>color</strong> (supported players: AS3, HTML5)
        <ul>
            <li>
    <p>This parameter specifies the color that will be used in the player's video progress bar to highlight the amount of the video that the viewer has already seen. Valid parameter values are red and white, and, by default, the player will use the color red in the video progress bar. See the YouTube API blog for more information about color options.</p>
            </li>
        </ul>
    </li>
    <li><strong>controls</strong> (supported players: AS3, HTML5)
        <ul>
            <li>
    <p>Values: 0, 1, or 2. Default is 1. This parameter indicates whether the video player controls will display. For IFrame embeds that load a Flash player, it also defines when the controls display in the player as well as when the player will load:</p>
                <ul>
                    <li>controls=0 – Player controls do not display in the player. For IFrame embeds, the Flash player loads immediately.</li>
                    <li>controls=1 – Player controls display in the player. For IFrame embeds, the controls display immediately and the Flash player also loads immediately.</li>
                    <li>controls=2 – Player controls display in the player. For IFrame embeds, the controls display and the Flash player loads after the user initiates the video playback.</li>
                </ul>
            </li>
        </ul>
    </li>
    <li><strong>disablekb</strong> (supported players: AS3)
        <ul>
            <li>
                <p>Values: 0 or 1. Default is 0. Setting to 1 will disable the player keyboard controls. Keyboard controls are as follows:
                    <ul>
                        <li>Spacebar: Play / Pause</li>
                        <li>Arrow Left: Jump back 10% in the current video</li>
                        <li>Arrow Right: Jump ahead 10% in the current video</li>
                        <li>Arrow Up: Volume up</li>
                        <li>Arrow Down: Volume Down</li>
                    </ul>
                </p>
            </li>
        </ul>
    </li>
    <li><strong>start_m</strong> (supported players: AS3)
        <ul>
            <li>
                <p>End of video at start_m:start_s</p>
            </li>
        </ul>
    </li>
    <li><strong>start_s</strong> (supported players: AS3)
        <ul>
            <li>
                <p>End of video at start_m:start_s</p>
            </li>
        </ul>
    </li>
    <li><strong>end_m</strong> (supported players: AS3)
        <ul>
            <li>
                <p>End of video at end_m:end_s</p>
            </li>
        </ul>
    </li>
    <li><strong>end_s</strong> (supported players: AS3)
        <ul>
            <li>
                <p>End of video at end_m:end_s</p>
            </li>
        </ul>
    </li>
    <li><strong>allowfullscreen</strong>  (supported players: AS3)
        <ul>
            <li>
                <p>Values: 0 or 1. The default value is 1, which causes the fullscreen button to display. Setting this parameter to 0 prevents the fullscreen button from displaying.</p>
            </li>
        </ul>
    </li>
    <li><strong>iv_load_policy</strong> (supported players: AS3, HTML5)
        <ul>
            <li>
                <p>Values: 1 or 3. Default is 1. Setting to 1 will cause video annotations to be shown by default, whereas setting to 3 will cause video annotations to not be shown by default.</p>
            </li>
        </ul>
    </li>
    <li><strong>modestbranding</strong> (supported players: AS3, HTML5)
        <ul>
            <li>
                <p>This parameter lets you use a YouTube player that does not show a YouTube logo. Set the parameter value to 1 to prevent the YouTube logo from displaying in the control bar. Note that a small YouTube text label will still display in the upper-right corner of a paused video when the user's mouse pointer hovers over the player.</p>
            </li>
        </ul>
    </li>
    <li><strong>suggested</strong>
        <ul>
            <li>
                <p>Show suggested videos when the video finishes</p>
            </li>
        </ul>
    </li>
    <li><strong>showinfo</strong> (supported players: AS3, HTML5) 
        <ul>
            <li>
                <p>Values: 0 or 1. The parameter's default value is 1. If you set the parameter value to 0, then the player will not display information like the video title and uploader before the video starts playing.</p>
                <p>If the player is loading a playlist, and you explicitly set the parameter value to 1, then, upon loading, the player will also display thumbnail images for the videos in the playlist. Note that this functionality is only supported for the AS3 player since that is the only player that can load a playlist.</p>
            </li>
        </ul>
    </li>
    <li><strong>theme</strong> (supported players: AS3, HTML5)
        <ul>
            <li>
                <p>This parameter indicates whether the embedded player will display player controls (like a play button or volume control) within a dark or light control bar. Valid parameter values are <strong>dark</strong> and <strong>light</strong>, and, by default, the player will display player controls using the dark theme. </p>
            </li>
        </ul>
    </li>
    <li><strong>quality</strong>
        <ul>
            <li>
                <p>Valid parameter values are 
                <ul>
                    <li>small</li>
                    <li>medium</li>
                    <li>large</li>
                    <li>hd720</li>
                    <li>hd1080</li>
                    <li>highres</li>
                </ul>
                </p>
            </li>
        </ul>
    </li>
    <li><strong>privacy</strong>
        <ul>
            <li>
                <p>Enable privacy-enhanced mode</p>
            </li>
        </ul>
    </li>
    <li><strong>class</strong>
        <ul>
            <li>
                <p>Set class at the video iframe</p>
            </li>
        </ul>
    </li>
    <li><strong>style</strong>
        <ul>
            <li>
                <p>Set style at the video iframe</p>
            </li>
        </ul>
    </li>
    <li><strong>maxw</strong>
        <ul>
            <li>
                <p>Set max-width in px at the video iframe</p>
            </li>
        </ul>
    </li>
    <li><strong>maxh</strong>
        <ul>
            <li>
                <p>Set max-height in px at the video iframe</p>
            </li>
        </ul>
    </li>
</ul>
