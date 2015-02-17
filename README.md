# Notifier

Notifier for Craft is a plugin that provides Airbrake notifications to <a href="http://codebasehq.com/" target="_blank">Codebase</a> and/or <a href="http://airbrake.io/" target="_blank">Airbrake.io</a>.

## Installation

1. Copy the included `notifier` directory into `craft/plugins`.
2. Use Composer to install the required libraries: `php composer.phar install`
3. Navigate to the **Plugins** settings in the CP and install Notifier.
4. Add the URL to the Codebase or Airbrake.io notifier and the necessary API key.

## Usage

You can use Notifier in your plugins or in your templates.

### PHP Usage

The NotifierService has one method: `sendString`, which takes one parameter for the message to send to Airbrake.

	if (class_exists('\Craft\NotifierPlugin')) {
		craft()->notifier->sendString($message);
	}

### Twig Template Usage

Notifier can be used in templates to send notifications when someone tries to access an invalid page, or when the template can't find the content it should.

	{% if craft.entries.section('blog') | length == 0 %}
		craft.notifier.notify('No blog posts were found.')
	{% endif %}

## Coming Soon

* Support for Slack notifications