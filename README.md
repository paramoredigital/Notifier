# Notifier

Notifier for Craft is a plugin that provides Airbrake notifications to Codebase and/or Airbrake.io.

## Installation

1. Copy the included `notifier` directory into `craft/plugins`.
2. Use Composer to install the required libraries:
3. Navigate to the **Plugins** settings in the CP and install Notifier.
4. Add the URL to the Codebase or Airbrake.io notifier and the necessary API key.

## Usage

You can use Notifier in your plugins or in your templates.

### PHP Usage

You can send notifications to Notifier using the sendToNotifier hook:

```php
craft()->plugins->call('sendToNotifier', array('The message...'));
```

### Twig Template Usage

Notifier can be used in templates to send notifications when someone tries to access an invalid page, or when the template can't find the content it should.

```twig
{% if craft.entries.section('blog') | length == 0 %}
	craft.notifier.notify('No blog posts were found.')
{% endif %}
```

## Coming Soon

* Support for Slack notifications