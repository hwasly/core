{% if helpers.exists('HWasly.proxy.general.enabled') and HWasly.proxy.general.enabled|default("0") == "1" %}
squid_setup="/usr/local/hwasly/scripts/proxy/setup.sh"
squid_enable="YES"
{% else %}
squid_enable="NO"
{% endif %}
