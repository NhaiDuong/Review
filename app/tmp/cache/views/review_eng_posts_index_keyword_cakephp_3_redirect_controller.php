<!--cachetime:1491624038--><?php
			App::uses('PostsController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjg6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToicG9zdHMiO3M6NjoiYWN0aW9uIjtzOjU6ImluZGV4IjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MDp7fXM6ODoibGFuZ3VhZ2UiO3M6MzoiZW5nIjtzOjY6InBhZ2luZyI7YToxOntzOjQ6IlBvc3QiO2E6MTA6e3M6NDoicGFnZSI7aToxO3M6NzoiY3VycmVudCI7aToxO3M6NToiY291bnQiO2k6MTtzOjg6InByZXZQYWdlIjtiOjA7czo4OiJuZXh0UGFnZSI7YjowO3M6OToicGFnZUNvdW50IjtpOjE7czo1OiJvcmRlciI7TjtzOjU6ImxpbWl0IjtpOjEwO3M6Nzoib3B0aW9ucyI7YTowOnt9czo5OiJwYXJhbVR5cGUiO3M6NToibmFtZWQiO319czo2OiJtb2RlbHMiO2E6Mjp7czo0OiJQb3N0IjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlBvc3QiO31zOjQ6IlVzZXIiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiVXNlciI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjE6e3M6Nzoia2V5d29yZCI7czoyOToiQ2FrZXBocCAzIHJlZGlyZWN0IGNvbnRyb2xsZXIiO31zOjM6InVybCI7czoxNToiZW5nL3Bvc3RzL2luZGV4IjtzOjQ6ImJhc2UiO3M6NzoiL1JldmlldyI7czo3OiJ3ZWJyb290IjtzOjg6Ii9SZXZpZXcvIjtzOjQ6ImhlcmUiO3M6MjM6Ii9SZXZpZXcvZW5nL3Bvc3RzL2luZGV4IjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new PostsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjQ6Ikh0bWwiO047czo0OiJGb3JtIjtOO3M6NToiQ2FjaGUiO047aTowO3M6OToiUGFnaW5hdG9yIjt9'));
				$controller->layout = $this->layout = 'layout';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo2OntzOjY6ImxhdGVzdCI7YToxMDp7aTowO2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6Mjk6IkNha2VwaHAgMyByZWRpcmVjdCBjb250cm9sbGVyIjtzOjQ6InNsdWciO3M6Mjk6ImNha2VwaHAtMy1yZWRpcmVjdC1jb250cm9sbGVyIjt9fWk6MTthOjE6e3M6NDoiUG9zdCI7YToyOntzOjU6InRpdGxlIjtzOjE1OiJhbG9uZSBhbG9uZSAxMjMiO3M6NDoic2x1ZyI7czoxNToiYWxvbmUtYWxvbmUtMTIzIjt9fWk6MjthOjE6e3M6NDoiUG9zdCI7YToyOntzOjU6InRpdGxlIjtzOjE1OiJjb2RlIGFuZHJvaWQgMTIiO3M6NDoic2x1ZyI7czoxNToiY29kZS1hbmRyb2lkLTEyIjt9fWk6MzthOjE6e3M6NDoiUG9zdCI7YToyOntzOjU6InRpdGxlIjtzOjE5OiJhamYgamFzZCBmaiBmc2YgMTIzIjtzOjQ6InNsdWciO3M6MTk6ImFqZi1qYXNkLWZqLWZzZi0xMjMiO319aTo0O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MTM6ImFzZGYgIGZhZCAxMjMiO3M6NDoic2x1ZyI7czoxMjoiYXNkZi1mYWQtMTIzIjt9fWk6NTthOjE6e3M6NDoiUG9zdCI7YToyOntzOjU6InRpdGxlIjtzOjEzOiJhcmlhbmEgZ3JhbmRlIjtzOjQ6InNsdWciO3M6MTM6ImFyaWFuYS1ncmFuZGUiO319aTo2O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6OToibmV3IHRpdGxlIjtzOjQ6InNsdWciO3M6OToibmV3LXRpdGxlIjt9fWk6NzthOjE6e3M6NDoiUG9zdCI7YToyOntzOjU6InRpdGxlIjtzOjIwOiJ3ZSBkb250IHRhbGsgYW55bW9yZSI7czo0OiJzbHVnIjtzOjIwOiJ3ZS1kb250LXRhbGstYW55bW9yZSI7fX1pOjg7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czo5OiJuaGFpIDEyMzQiO3M6NDoic2x1ZyI7czo5OiJuaGFpLTEyMzQiO319aTo5O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MTA6ImFzZGYgYXNmZGYiO3M6NDoic2x1ZyI7czoxMDoiYXNkZi1hc2ZkZiI7fX19czo1OiJwb3N0cyI7YToxOntpOjA7YToyOntzOjQ6IlBvc3QiO2E6ODp7czoyOiJpZCI7czoyOiIzMCI7czo1OiJ0aXRsZSI7czoyOToiQ2FrZXBocCAzIHJlZGlyZWN0IGNvbnRyb2xsZXIiO3M6NDoiYm9keSI7czoyNDY6ImRvd24gdm90ZQpUYWtlIGEgbG9vayBhdCB0aGlzClJlc3BvbnNlIHByb3ZpZGVzIGFuIGludGVyZmFjZSB0byB3cmFwIHRoZSBjb21tb24gcmVzcG9uc2UtcmVsYXRlZCB0YXNrcyBzdWNoIGFzOiBTZW5kaW5nIGhlYWRlcnMgZm9yIHJlZGlyZWN0cy4KYW5kIHRoaXMKCllvdSBzaG91bGQgcmV0dXJuIHRoZSByZXNwb25zZSBpbnN0YW5jZSBmcm9tIHlvdXIgYWN0aW9uIHRvIHByZXZlbnQgdmlldyByZW5kZXJpbmcgYW5kIGxldCB0aCI7czo3OiJ1c2VyX2lkIjtzOjE6IjEiO3M6NDoic2x1ZyI7czoyOToiY2FrZXBocC0zLXJlZGlyZWN0LWNvbnRyb2xsZXIiO3M6OToidmlld0NvdW50IjtzOjE6IjYiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNy0wNC0wOCAwMzo0NzoxMiI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNy0wNC0wOCAwMzo0NzoxMiI7fXM6NDoiVXNlciI7YTo3OntzOjI6ImlkIjtzOjE6IjEiO3M6ODoidXNlcm5hbWUiO3M6NjoibmhhaWR0IjtzOjg6InBhc3N3b3JkIjtzOjQwOiI3MTVmOTUyNWE4YzMyY2RjZWM4NWZjYWVkNTA2MmE1NzRhYjYyMTJjIjtzOjQ6InJvbGUiO3M6NToiYWRtaW4iO3M6MzoiZG9iIjtzOjEwOiIyMDE3LTA0LTAzIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTctMDQtMDMgMDQ6NTM6NTgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTctMDQtMDMgMDQ6NTM6NTgiO319fXM6NDoidXNlciI7czoxOiIxIjtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6NjI4NjoiPGRpdiBpZD0ic2lkZWJhciI+DQogICAgPGRpdiBpZD0ic2VhcmNoIj4NCiAgICAgICAgPGgyPlNlYXJjaDwvaDI+DQogICAgICAgIDxmb3JtIGFjdGlvbj0iIyI+DQogICAgICAgICAgICA8ZGl2IGlkPSJzZWFyY2hmaWVsZCI+DQogICAgICAgICAgICAgICAgPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImtleXdvcmQiIGNsYXNzPSJrZXl3b3JkIiAvPg0KICAgICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZm9ybT4NCiAgICA8L2Rpdj4NCjwvZGl2PjwhLS0gU1RBUlQgUEFHRSBTT1VSQ0UgLS0+DQogICAgPGRpdiBpZD0iY29udGVudCI+DQogICAgICAgIDxkaXYgY2xhc3M9Im5vdGlmaWNhdGlvbiI+DQogICAgICAgICAgICA8aDI+PC9oMj4NCiAgICAgICAgICAgIDxoMj48L2gyPg0KICAgICAgICAgICAgPGgyPjwvaDI+DQogICAgICAgICAgICA8aDI+PC9oMj4NCiAgICAgICAgICAgIDxoMj48L2gyPg0KICAgICAgICAgICAgPGgyPjwvaDI+DQogICAgICAgICAgICA8aDI+PC9oMj4NCiAgICAgICAgPC9kaXY+DQogICAgICA8ZGl2IGlkPSJsZWZ0Ij4NCiAgICAgICAgPGRpdiBjbGFzcz0icG9zdCI+DQogICAgICAgICAgICA8IS0tbm9jYWNoZTowMDItLT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InBvc3RsZWZ0Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InBvc3RkYXRlIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0iZGF5Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgMDggICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zcGFuPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJtb250aCI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEFwciAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+DQogICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImNvbW1lbnRzIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW1nIHNyYz0iL1Jldmlldy9pbWcvdmlldy5wbmciIGFsdD0idmlldyIgd2lkdGg9IjI1IiBoZWlnaHQ9IjI1IiAvPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSIjIiBjbGFzcz0idmlldyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDYgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPg0KDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJwb3N0Y29udGVudCI+DQogICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0icG9zdGhlYWRlciI+DQogICAgICAgICAgICAgICAgICAgICAgPGgyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvY2FrZXBocC0zLXJlZGlyZWN0LWNvbnRyb2xsZXIiPkNha2VwaHAgMyByZWRpcmVjdCBjb250cm9sbGVyPC9hPiAgICAgICAgICAgICAgICAgICAgICA8L2gyPg0KDQogICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9InBvc3RtZXRhIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgQnkgbmhhaWR0ICAgICAgICAgICAgICAgICAgICAgIDwvc3Bhbj4NCg0KICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgIDxwPg0KICAgICAgICAgICAgICAgICAgICAgICAgICBkb3duIHZvdGUKVGFrZSBhIGxvb2sgYXQgdGhpcwpSZXNwb25zZSBwcm92aWRlcyBhbiBpbnRlcmZhY2UgdG8gd3JhcCB0aGUgY29tbW9uIHJlc3BvbnNlLXJlbGF0ZWQgdGFza3Mgc3VjaCBhczogU2VuZGluZyBoZWFkZXJzIGZvciByZWRpcmVjdHMuCmFuZCB0aGlzCgpZb3Ugc2hvdWxkIHJldHVybiB0aGUgcmVzcG9uc2UgaW5zdGFuY2UgZnJvbSB5by4uLiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJyZWFkbW9yZSI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9jYWtlcGhwLTMtcmVkaXJlY3QtY29udHJvbGxlciI+cmVhZCBtb3JlPC9hPiAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zcGFuPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3A+DQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwhLS0vbm9jYWNoZS0tPg0KICAgICAgICA8L2Rpdj4NCiAgICAgICAgPGRpdiBjbGFzcz0icGFnaW5hdGlvbiBjbGVhciI+DQogICAgICAgICAgPGRpdiBjbGFzcz0icHJlIj4NCiAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9InByZXYgZGlzYWJsZWQiPjwvc3Bhbj4gICAgICAgICAgPC9kaXY+DQogICAgICAgICAgPGRpdiBjbGFzcz0ibmV4dCI+DQogICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJuZXh0IGRpc2FibGVkIj48L3NwYW4+ICAgICAgICAgIDwvZGl2Pg0KICAgICAgICA8L2Rpdj4NCiAgICAgIDwvZGl2Pg0KPGRpdiBpZD0ic2lkZWJhciI+DQo8IS0tICAgIC0tPiAgICA8ZGl2IGlkPSJzYl9jb250YWluZXIiPg0KICAgICAgICAgICAgICAgICAgICA8aDI+DQogICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9Imxpc3RfdXNlciI+DQogICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvYWRkIj5BZGQgbmV3IHBvc3Q8L2E+ICAgICAgICAgICAgICAgIDwvc3Bhbj4NCiAgICAgICAgICAgIDwvaDI+DQogICAgICAgICAgICAgICAgPGgyPg0KICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0ibGlzdF91c2VyIj4NCiAgICAgICAgICAgICAgICAgIDxhIGhyZWY9Ii9SZXZpZXcvdXNlcnMiPkxpc3QgdXNlcnM8L2E+ICAgICAgICAgICAgICA8L3NwYW4+DQogICAgICAgIDwvaDI+DQogICAgICAgIDxoMj4NCiAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJsaXN0X3VzZXIiPg0KICAgICAgICAgICAgICAgIDxhIGhyZWY9IiMiIG9uY2xpY2s9InJldHVybiBmYWxzZTsiPk9sZGVyIFBvc3RzPC9hPiAgICAgICAgICAgIDwvc3Bhbj48L2gyPg0KICAgICAgICA8ZGl2IGNsYXNzPSJwb3N0cyI+DQogICAgICAgICAgICA8dWw+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9lbS1raG9uZy1sYS1kdXktbmhhdCI+ZW0ga2jDtG5nIGzDoCBkdXkgbmjhuqV0PC9hPjwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL2FkLWphc2Rma3Mtamtkcy1zZGpkZiI+YWQgamFzZGZrcyBqa2RzIHNkamRmPC9hPjwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL2hlbGxvLXdvcmxkIj5IZWxsbyBXb3JsZDwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9qYXNmLWFzaGQta2FzaGYtYmFzbmgtcmFzbiI+amFzZiBhc2hkIGthc2hmIGJhc25oIHJhc248L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvZGZhc2ZkIj5kZmFzZmQ8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvbmhhLXBodW9uZyI+bmhhIHBodW9uZyA8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvZ2lvdC1uYW5nLWJlbi10aGVtIj5naW90IG5hbmcgYmVuIHRoZW0gMTIzNDwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy90aGFuZy00LWxhLWxvaS1ub2ktZG9pLWN1YS1lbSI+dGhhbmcgNCBsYSBsb2kgbm9pIGRvaSBjdWE8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvdXNpbmctcGx1Z2luLXNsdWdnYWJsZS1pbi1jYWtlcGhwIj51c2luZyBwbHVnaW4gc2x1Z2dhYmxlIGluIGNha2VwaHA8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvaG4tci1nZiI+aG4gciBnZiBmIGhnaDwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC91bD4NCiAgICAgICAgPC9kaXY+DQogICAgICAgIDxoMj4NCiAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJsaXN0X3VzZXIiPg0KICAgICAgICAgICAgICAgIDxhIGhyZWY9IiMiIG9uY2xpY2s9InJldHVybiBmYWxzZTsiPkxhdGVzdCBQb3N0czwvYT4gICAgICAgICAgICA8L3NwYW4+DQogICAgICAgIDwvaDI+DQogICAgICAgIDwhLS1ub2NhY2hlOjAwMS0tPg0KICAgICAgICA8ZGl2IGNsYXNzPSJwb3N0cyIgaWQ9ImxhdGVzdCI+DQogICAgICAgICAgICA8dWw+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9jYWtlcGhwLTMtcmVkaXJlY3QtY29udHJvbGxlciI+Q2FrZXBocCAzIHJlZGlyZWN0IGNvbnRyb2xsZXI8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvYWxvbmUtYWxvbmUtMTIzIj5hbG9uZSBhbG9uZSAxMjM8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvY29kZS1hbmRyb2lkLTEyIj5jb2RlIGFuZHJvaWQgMTI8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvYWpmLWphc2QtZmotZnNmLTEyMyI+YWpmIGphc2QgZmogZnNmIDEyMzwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9hc2RmLWZhZC0xMjMiPmFzZGYgIGZhZCAxMjM8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvYXJpYW5hLWdyYW5kZSI+YXJpYW5hIGdyYW5kZTwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9uZXctdGl0bGUiPm5ldyB0aXRsZTwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy93ZS1kb250LXRhbGstYW55bW9yZSI+d2UgZG9udCB0YWxrIGFueW1vcmU8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvbmhhaS0xMjM0Ij5uaGFpIDEyMzQ8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvYXNkZi1hc2ZkZiI+YXNkZiBhc2ZkZjwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC91bD4NCiAgICAgICAgPC9kaXY+DQogICAgICAgIDwhLS0vbm9jYWNoZS0tPg0KICAgIDwvZGl2Pg0KPC9kaXY+DQo8ZGl2IGNsYXNzPSJjbGVhciI+PC9kaXY+DQo8L2Rpdj4NCjwvZGl2PiI7czoxODoic2NyaXB0c19mb3JfbGF5b3V0IjtzOjA6IiI7czoxNjoidGl0bGVfZm9yX2xheW91dCI7czo1OiJQb3N0cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$controller->constructClasses();
				$controller->startupProcess();
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?> <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    <title>
            </title>
    <link href="/Review/favicon.ico" type="image/x-icon" rel="icon" /><link href="/Review/favicon.ico" type="image/x-icon" rel="shortcut icon" />
	<link rel="stylesheet" type="text/css" href="/Review/css/main.css" />

	<script type="text/javascript" src="/Review/js/myScript.js"></script>
</head>

<div id="wrap">
    <div id="wrap-container">
        <div id="topnav">
            <h1 id="sitename">Blog</h1>
            <ul id="nav">
                <li><a href="/Review/posts/index">Home</a></a></li>
                <li><a href="/Review/posts/index">Contact</a></a></li>
                <li><a href="/Review/posts/index">About us</a></a></li>
                
                <!--                    <li>-->
                <?php
                if ($this->Session->read('Auth.User')){
                    echo '<li>';
                    echo $this->Html->link(__('Logout'), array('action'=>'logout', 'controller'=>'users'));
                    echo '</li>';
                }
                else{
                    echo '<li>';
                    echo $this->Html->link(__('Login'),array('action'=>'login', 'controller'=>'users'));
                    echo '</li>';
                }

                ?>
                <!--                    </li>-->
            </ul>
            <ul id="lang">
                <li>
                    <?php
                    //                        if (isset($user)) {
                    echo $this->Html->link(__('Eng'), array('language' => 'eng'));
                    echo "|";
                    echo $this->Html->link(__('Vie'), array('language' => 'vie'));
                    //                        }
                    //                        ?>
                </li>
            </ul>
            
        </div>
        <div id="header">
            <div id="featuredpost">
                <div id="featuredthumb">
                    <img src="/Review/img/featuredimage.jpg" alt="featuredimage" class="shadow" width="200" height="135" />                </div>
                <div id="featuredcontent">
                    <h2><span>Hello World</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam blandit facilisis viverra. Nullam id tristique arcu.
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vehicula eros commodo est vestibulum cursus..
                        <span class="readmore">
                  <a href="#">read more</a>
              </span>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div><div id="sidebar">
    <div id="search">
        <h2>Search</h2>
        <form action="#">
            <div id="searchfield">
                <input type="text" name="keyword" class="keyword" />
            </div>
        </form>
    </div>
</div><!-- START PAGE SOURCE -->
    <div id="content">
        <div class="notification">
            <h2></h2>
            <h2></h2>
            <h2></h2>
            <h2></h2>
            <h2></h2>
            <h2></h2>
            <h2></h2>
        </div>
      <div id="left">
        <div class="post">
            
            <?php
            if (isset($posts)){
                foreach ($posts as $post){?>
                  <div class="postleft">
                        <div class="postdate">
                            <span class="day">
                                <?php echo date('d', strtotime($post['Post']['created']));?>
                            </span>
                            <span class="month">
                                <?php echo __(date('M'), strtotime($post['Post']['created']));?>
                            </span>
                        </div>
                        <div class="comments">
                             <p>

                                  <?php echo $this->Html->image('/img/view.png', array('alt' => 'view', 'width' => '25', 'height' => '25'));?>
                                  <a href="#" class="view">
                                      <?php echo $post['Post']['viewCount'];?>
                                  </a>

                             </p>
                        </div>
                  </div>
                  <div class="postcontent">
                      <div class="postheader">
                      <h2>
                          <?php
                          echo $this->Html->link(h($post['Post']['title']), array(
                              'controller' => 'posts',
                              'action' => 'view',
                              'slug' => $post['Post']['slug']
                          ));
                          ?>
                      </h2>

                      <span class="postmeta">
                          <?php
                            echo __('By ') ,$post['User']['username'];
                          ?>
                      </span>

                      </div>
                      <p>
                          <?php
                          if (strlen($post['Post']['body']) >= 200 ) {
                              $body = substr($post['Post']['body'], 0, 200);
                              echo $body . '...';
                              ?>
                              <span class="readmore">
                                <?php
                                echo $this->Html->link(__('read more'), array(
                                    'controller' => 'posts',
                                    'action' => 'view',
                                    'slug' => $post['Post']['slug']
                                ));
                                ?>
                          </span>
                              <?php
                          }
                          else{
                              echo $post['Post']['body'];
                          }
                              ?>
                    </p>
                  </div>
            <?php }} ?>
            
        </div>
        <div class="pagination clear">
          <div class="pre">
              <span class="prev disabled"></span>          </div>
          <div class="next">
              <span class="next disabled"></span>          </div>
        </div>
      </div>
<div id="sidebar">
<!--    -->    <div id="sb_container">
                    <h2>
                <span class="list_user">
                    <a href="/Review/posts/add">Add new post</a>                </span>
            </h2>
                <h2>
              <span class="list_user">
                  <a href="/Review/users">List users</a>              </span>
        </h2>
        <h2>
            <span class="list_user">
                <a href="#" onclick="return false;">Older Posts</a>            </span></h2>
        <div class="posts">
            <ul>
                                        <li><a href="/Review/posts/tin-tuc/em-khong-la-duy-nhat">em không là duy nhất</a></a></li>
                                            <li><a href="/Review/posts/tin-tuc/ad-jasdfks-jkds-sdjdf">ad jasdfks jkds sdjdf</a></a></li>
                                            <li><a href="/Review/posts/tin-tuc/hello-world">Hello World</a></a></li>
                                            <li><a href="/Review/posts/tin-tuc/jasf-ashd-kashf-basnh-rasn">jasf ashd kashf basnh rasn</a></a></li>
                                            <li><a href="/Review/posts/tin-tuc/dfasfd">dfasfd</a></a></li>
                                            <li><a href="/Review/posts/tin-tuc/nha-phuong">nha phuong </a></a></li>
                                            <li><a href="/Review/posts/tin-tuc/giot-nang-ben-them">giot nang ben them 1234</a></a></li>
                                            <li><a href="/Review/posts/tin-tuc/thang-4-la-loi-noi-doi-cua-em">thang 4 la loi noi doi cua</a></a></li>
                                            <li><a href="/Review/posts/tin-tuc/using-plugin-sluggable-in-cakephp">using plugin sluggable in cakephp</a></a></li>
                                            <li><a href="/Review/posts/tin-tuc/hn-r-gf">hn r gf f hgh</a></a></li>
                                </ul>
        </div>
        <h2>
            <span class="list_user">
                <a href="#" onclick="return false;">Latest Posts</a>            </span>
        </h2>
        
        <div class="posts" id="latest">
            <ul>
                <?php if (isset($latest)){
                    foreach ($latest as $latest){ ?>
                        <li><?php echo $this->Html->link(__($latest['Post']['title']), array('controller' => 'posts', 'action' => 'view', 'slug' => $latest['Post']['slug']));?></a></li>
                    <?php        }}?>
            </ul>
        </div>
        
    </div>
</div>
<div class="clear"></div>
</div>
</div><div id="bottom">
    <div id="container">
        <div id="about">
            <div id="authorimage">
                <img src="/Review/img/authorimg.png" width="108" height="108" alt="" />            </div>
            <div id="authorbio">
                <h2>About</h2>
                <p>The modern English word blue comes from Middle English bleu or blewe, from the Old French bleu, a word of Germanic origin related to Old Dutch, Old High German,[2] Old Saxon blāo and Old Frisian blāw, blau.[3][4] The clear sky and the deep sea appear blue because of an optical effect known as Rayleigh scattering. When sunlight passes through the atmosphere, the blue wavelengths are scattered more widely by the oxygen and nitrogen molecules, and more blue comes to our eyes.</p>
            </div>
        </div>
        <div id="tags">
            <h2 class="title">Tag Cloud</h2>
            <div class="content"> <a href="#" class="level6">inspiration</a> <a href="#" class="level5">daily inspiration</a> <a href="#" class="level4">photography</a> <a href="#" class="level4">tutorial</a> <a href="#" class="level4">illustration</a> <a href="#" class="level4">design</a> <a href="#" class="level3">best of the week</a> <a href="#" class="level3">iphone</a> <a href="#" class="level3">Typography</a> <a href="#" class="level3">photoshop</a> <a href="#" class="level3">wallpaper</a> <a href="#" class="level2">architecture</a> <a href="#" class="level2">web design</a> <a href="#" class="level2">interview</a> <a href="#" class="level2">video</a> <a href="#" class="level2">free</a> <a href="#" class="level2">wallpaper of the week</a> <a href="#" class="level2">sites of the week</a> <a href="#" class="level2">graphic design</a> <a href="#" class="level2">freebie</a> <a href="#" class="level2">fonts</a> <a href="#" class="level2">case study</a> <a href="#" class="level2">logo</a> <a href="#" class="level2">giveaway</a> <a href="#" class="level2">art</a> <a href="#" class="level1">hdr</a> <a href="#" class="level1">digital art</a> <a href="#" class="level1">poster</a> <a href="#" class="level1">fireworks</a> <a href="#" class="level1">posters</a> <a href="#" class="level1">illustrator</a> <a href="#" class="level1">gadgets</a> <a href="#" class="level1">photo manipulation</a> <a href="#" class="level1">ads</a> <a href="#" class="level1">logo design</a> <a href="#" class="level1">FFFF</a> <a href="#" class="level1">3d</a> <a href="#" class="level1">video of the week</a> <a href="#" class="level1">offices</a> <a href="#" class="level1">product design</a> </div>
        </div>
        <div class="clear"></div>
    </div>
    <div id="credits">
        <div class="leftalign">Copyright &copy; 2010 YourSiteName.com</div>
        <div class="rightalign">Design by <a href="http://cssheaven.org">CSSHeaven.org</a></div>
    </div>
</div>
</body>

</html>