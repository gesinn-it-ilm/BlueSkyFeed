<?php
class BlueSkyFeedHooks {
    public static function onParserFirstCallInit( Parser $parser ) {
        $parser->setFunctionHook( 'blueskyfeed', [ self::class, 'renderBlueSkyFeed' ] );
        return true;
    }

    public static function renderBlueSkyFeed( Parser $parser, $username = '' ) {
        if ( !$username ) {
            return '<strong class="error">BlueSky username missing</strong>';
        }
        // For now, simple placeholder output
        return "<div>BlueSky feed for user: <strong>" . htmlspecialchars( $username ) . "</strong></div>";
    }
}
