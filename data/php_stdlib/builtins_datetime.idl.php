<?php
// THIS IS AUTOGENERATED BY builtins_php.ml
function checkdate($month, $day, $year) { }
function date_create($time = null_string, $timezone = null_object) { }
function date_date_set($object, $year, $month, $day) { }
function date_default_timezone_get() { }
function date_default_timezone_set($name) { }
function date_format($object, $format) { }
function date_isodate_set($object, $year, $week, $day = 1) { }
function date_modify($object, $modify) { }
function date_offset_get($object) { }
function date_parse($date) { }
function date_sun_info($ts, $latitude, $longitude) { }
function date_sunrise($timestamp, $format = 0, $latitude = 0.0, $longitude = 0.0, $zenith = 0.0, $gmt_offset = 99999.0) { }
function date_sunset($timestamp, $format = 0, $latitude = 0.0, $longitude = 0.0, $zenith = 0.0, $gmt_offset = 99999.0) { }
function date_time_set($object, $hour, $minute, $second = 0) { }
function date_timezone_get($object) { }
function date_timezone_set($object, $timezone) { }
function date($format, $timestamp = null /* TimeStamp::Current() */) { }
function getdate($timestamp = null /* TimeStamp::Current() */) { }
function gettimeofday($return_float = false) { }
function gmdate($format, $timestamp = null /* TimeStamp::Current() */) { }
function gmmktime($hour = INT_MAX, $minute = INT_MAX, $second = INT_MAX, $month = INT_MAX, $day = INT_MAX, $year = INT_MAX) { }
function gmstrftime($format, $timestamp = null /* TimeStamp::Current() */) { }
function idate($format, $timestamp = null /* TimeStamp::Current() */) { }
function localtime($timestamp = null /* TimeStamp::Current() */, $is_associative = false) { }
function microtime($get_as_float = false) { }
function mktime($hour = INT_MAX, $minute = INT_MAX, $second = INT_MAX, $month = INT_MAX, $day = INT_MAX, $year = INT_MAX) { }
function strftime($format, $timestamp = null /* TimeStamp::Current() */) { }
function strptime($date, $format) { }
function strtotime($input, $timestamp = null /* TimeStamp::Current() */) { }
function time() { }
function timezone_abbreviations_list() { }
function timezone_identifiers_list() { }
function timezone_name_from_abbr($abbr, $gmtoffset = -1, $isdst = true) { }
function timezone_name_get($object) { }
function timezone_offset_get($object, $dt) { }
function timezone_open($timezone) { }
function timezone_transitions_get($object) { }
class DateTime {
const ATOM = 0;
const COOKIE = 0;
const ISO8601 = 0;
const RFC822 = 0;
const RFC850 = 0;
const RFC1036 = 0;
const RFC1123 = 0;
const RFC2822 = 0;
const RFC3339 = 0;
const RSS = 0;
const W3C = 0;
 function __construct($time = "now", $timezone = null_object) { }
 function format($format) { }
 function getOffset() { }
 function getTimezone() { }
 function modify($modify) { }
 function setDate($year, $month, $day) { }
 function setISODate($year, $week, $day = 1) { }
 function setTime($hour, $minute, $second = 0) { }
 function setTimezone($timezone) { }
 function __destruct() { }
}
class DateTimeZone {
const AFRICA = 0;
const AMERICA = 0;
const ANTARCTICA = 0;
const ARCTIC = 0;
const ASIA = 0;
const ATLANTIC = 0;
const AUSTRALIA = 0;
const EUROPE = 0;
const INDIAN = 0;
const PACIFIC = 0;
const UTC = 0;
const ALL = 0;
const ALL_WITH_BC = 0;
const PER_COUNTRY = 0;
 function __construct($timezone) { }
 function getName() { }
 function getOffset($datetime) { }
 function getTransitions() { }
 function listAbbreviations() { }
 function listIdentifiers() { }
 function __destruct() { }
}
