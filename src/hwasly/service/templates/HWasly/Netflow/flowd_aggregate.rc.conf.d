#
# Automatic generated configuration for netflow.
# Do not edit this file manually.
#
{%
  if helpers.exists('HWasly.Netflow.collect.enable')
  and
  HWasly.Netflow.collect.enable|default('0') == "1"
%}
flowd_aggregate_enable="YES"
{% else %}
flowd_aggregate_enable="NO"
{% endif %}
