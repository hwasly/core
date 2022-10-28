{# Macro import #}
{% from 'HWasly/Macros/interface.macro' import physical_interface %}
{% if not helpers.empty('HWasly.IDS.general.enabled') %}
suricata_setup="/usr/local/hwasly/scripts/suricata/setup.sh"
suricata_enable="YES"
{% if HWasly.IDS.general.ips|default("0") == "1" %}
# IPS mode, switch to netmap
suricata_netmap="YES"
{% else %}
# IDS mode, pcap live mode
{% set addFlags=[] %}
{%   for intfName in HWasly.IDS.general.interfaces.split(',') %}
{#     store additional interfaces to addFlags #}
{%     do addFlags.append(physical_interface(intfName)) %}
{%   endfor %}
suricata_interface="{{ addFlags|join(' ') }}"
{% endif %}
{% else %}
suricata_enable="NO"
{% endif %}
