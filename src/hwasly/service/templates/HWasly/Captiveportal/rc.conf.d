{% set isEnabled=[] %}
{% if helpers.exists('HWasly.captiveportal.zones.zone') %}
{%   for cpZone in  helpers.toList('HWasly.captiveportal.zones.zone') %}
{%     if cpZone.enabled|default('0') == '1' %}
{%	do isEnabled.append(cpZone) %}
{%     endif %}
{%   endfor %}
{% endif
%}
captiveportal_defer="YES"
captiveportal_enable="{% if isEnabled %}YES{% else %}NO{% endif %}"
