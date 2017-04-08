<!--cachetime:1491622864--><?php
			App::uses('PostsController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjg6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToicG9zdHMiO3M6NjoiYWN0aW9uIjtzOjU6ImluZGV4IjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MDp7fXM6ODoibGFuZ3VhZ2UiO3M6MzoiZW5nIjtzOjY6InBhZ2luZyI7YToxOntzOjQ6IlBvc3QiO2E6MTA6e3M6NDoicGFnZSI7aToxO3M6NzoiY3VycmVudCI7aToxO3M6NToiY291bnQiO2k6MTtzOjg6InByZXZQYWdlIjtiOjA7czo4OiJuZXh0UGFnZSI7YjowO3M6OToicGFnZUNvdW50IjtpOjE7czo1OiJvcmRlciI7TjtzOjU6ImxpbWl0IjtpOjEwO3M6Nzoib3B0aW9ucyI7YTowOnt9czo5OiJwYXJhbVR5cGUiO3M6NToibmFtZWQiO319czo2OiJtb2RlbHMiO2E6Mjp7czo0OiJQb3N0IjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6IlBvc3QiO31zOjQ6IlVzZXIiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiVXNlciI7fX19czo0OiJkYXRhIjthOjA6e31zOjU6InF1ZXJ5IjthOjE6e3M6Nzoia2V5d29yZCI7czo5OiJuZXcgdGl0bGUiO31zOjM6InVybCI7czoxNToiZW5nL3Bvc3RzL2luZGV4IjtzOjQ6ImJhc2UiO3M6NzoiL1JldmlldyI7czo3OiJ3ZWJyb290IjtzOjg6Ii9SZXZpZXcvIjtzOjQ6ImhlcmUiO3M6MjM6Ii9SZXZpZXcvZW5nL3Bvc3RzL2luZGV4IjtzOjEzOiIAKgBfZGV0ZWN0b3JzIjthOjExOntzOjM6ImdldCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiR0VUIjt9czo0OiJwb3N0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJQT1NUIjt9czozOiJwdXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IlBVVCI7fXM6NjoiZGVsZXRlIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo2OiJERUxFVEUiO31zOjQ6ImhlYWQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IkhFQUQiO31zOjc6Im9wdGlvbnMiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjc6Ik9QVElPTlMiO31zOjM6InNzbCI7YToyOntzOjM6ImVudiI7czo1OiJIVFRQUyI7czo1OiJ2YWx1ZSI7aToxO31zOjQ6ImFqYXgiO2E6Mjp7czozOiJlbnYiO3M6MjE6IkhUVFBfWF9SRVFVRVNURURfV0lUSCI7czo1OiJ2YWx1ZSI7czoxNDoiWE1MSHR0cFJlcXVlc3QiO31zOjU6ImZsYXNoIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6NzoicGF0dGVybiI7czoyNjoiL14oU2hvY2t3YXZlfEFkb2JlKSBGbGFzaC8iO31zOjY6Im1vYmlsZSI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6Im9wdGlvbnMiO2E6MjY6e2k6MDtzOjc6IkFuZHJvaWQiO2k6MTtzOjc6IkF2YW50R28iO2k6MjtzOjEwOiJCbGFja0JlcnJ5IjtpOjM7czo2OiJEb0NvTW8iO2k6NDtzOjY6IkZlbm5lYyI7aTo1O3M6NDoiaVBvZCI7aTo2O3M6NjoiaVBob25lIjtpOjc7czo0OiJpUGFkIjtpOjg7czo0OiJKMk1FIjtpOjk7czo0OiJNSURQIjtpOjEwO3M6ODoiTmV0RnJvbnQiO2k6MTE7czo1OiJOb2tpYSI7aToxMjtzOjEwOiJPcGVyYSBNaW5pIjtpOjEzO3M6MTA6Ik9wZXJhIE1vYmkiO2k6MTQ7czo2OiJQYWxtT1MiO2k6MTU7czoxMDoiUGFsbVNvdXJjZSI7aToxNjtzOjk6InBvcnRhbG1tbSI7aToxNztzOjc6IlBsdWNrZXIiO2k6MTg7czoxNDoiUmVxd2lyZWxlc3NXZWIiO2k6MTk7czoxMjoiU29ueUVyaWNzc29uIjtpOjIwO3M6NzoiU3ltYmlhbiI7aToyMTtzOjExOiJVUFwuQnJvd3NlciI7aToyMjtzOjU6IndlYk9TIjtpOjIzO3M6MTA6IldpbmRvd3MgQ0UiO2k6MjQ7czoxNjoiV2luZG93cyBQaG9uZSBPUyI7aToyNTtzOjU6IlhpaW5vIjt9fXM6OToicmVxdWVzdGVkIjthOjI6e3M6NToicGFyYW0iO3M6OToicmVxdWVzdGVkIjtzOjU6InZhbHVlIjtpOjE7fX1zOjk6IgAqAF9pbnB1dCI7czowOiIiO30='));
				$response->type('text/html');
				$controller = new PostsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjQ6Ikh0bWwiO047czo0OiJGb3JtIjtOO3M6NToiQ2FjaGUiO047aTowO3M6OToiUGFnaW5hdG9yIjt9'));
				$controller->layout = $this->layout = 'layout';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo2OntzOjY6ImxhdGVzdCI7YToxMDp7aTowO2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MTU6ImFsb25lIGFsb25lIDEyMyI7czo0OiJzbHVnIjtzOjE1OiJhbG9uZS1hbG9uZS0xMjMiO319aToxO2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MTU6ImNvZGUgYW5kcm9pZCAxMiI7czo0OiJzbHVnIjtzOjE1OiJjb2RlLWFuZHJvaWQtMTIiO319aToyO2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MTk6ImFqZiBqYXNkIGZqIGZzZiAxMjMiO3M6NDoic2x1ZyI7czoxOToiYWpmLWphc2QtZmotZnNmLTEyMyI7fX1pOjM7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoxMzoiYXNkZiAgZmFkIDEyMyI7czo0OiJzbHVnIjtzOjEyOiJhc2RmLWZhZC0xMjMiO319aTo0O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MTM6ImFyaWFuYSBncmFuZGUiO3M6NDoic2x1ZyI7czoxMzoiYXJpYW5hLWdyYW5kZSI7fX1pOjU7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czo5OiJuZXcgdGl0bGUiO3M6NDoic2x1ZyI7czo5OiJuZXctdGl0bGUiO319aTo2O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjA6IndlIGRvbnQgdGFsayBhbnltb3JlIjtzOjQ6InNsdWciO3M6MjA6IndlLWRvbnQtdGFsay1hbnltb3JlIjt9fWk6NzthOjE6e3M6NDoiUG9zdCI7YToyOntzOjU6InRpdGxlIjtzOjk6Im5oYWkgMTIzNCI7czo0OiJzbHVnIjtzOjk6Im5oYWktMTIzNCI7fX1pOjg7YToxOntzOjQ6IlBvc3QiO2E6Mjp7czo1OiJ0aXRsZSI7czoxMDoiYXNkZiBhc2ZkZiI7czo0OiJzbHVnIjtzOjEwOiJhc2RmLWFzZmRmIjt9fWk6OTthOjE6e3M6NDoiUG9zdCI7YToyOntzOjU6InRpdGxlIjtzOjE5OiJhIGxpdHRlIGJveSAxMjMgNDU2IjtzOjQ6InNsdWciO3M6MTE6ImEtbGl0dGUtYm95Ijt9fX1zOjU6InBvc3RzIjthOjE6e2k6MDthOjI6e3M6NDoiUG9zdCI7YTo4OntzOjI6ImlkIjtzOjI6IjIxIjtzOjU6InRpdGxlIjtzOjk6Im5ldyB0aXRsZSI7czo0OiJib2R5IjtzOjI1NToiQ2FrZVBIUCBhbHNvIG1ha2VzIHVzZSBvZiDigJhyZXZlcnNlIHJvdXRpbmfigJkuIElmLCB3aXRoIHRoZSBhYm92ZSByb3V0ZSBkZWZpbmVkLCB5b3UgcGFzcyBhcnJheSgnY29udHJvbGxlcicgPT4gJ3Bvc3RzJywgJ2FjdGlvbicgPT4gJ2luZGV4JykgdG8gYSBmdW5jdGlvbiBleHBlY3RpbmcgYW4gYXJyYXksIHRoZSByZXN1bHRpbmcgVVJMIHVzZWQgd2lsbCBiZSDigJgv4oCZLiBJdOKAmXMgdGhlcmVmb3JlIGEgZ29vZCBpZGVhIHRvIGFsd2F5IjtzOjc6InVzZXJfaWQiO3M6MToiMSI7czo0OiJzbHVnIjtzOjk6Im5ldy10aXRsZSI7czo5OiJ2aWV3Q291bnQiO3M6MToiNiI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE3LTA0LTA3IDA0OjQyOjEwIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDE3LTA0LTA3IDA0OjQyOjEwIjt9czo0OiJVc2VyIjthOjc6e3M6MjoiaWQiO3M6MToiMSI7czo4OiJ1c2VybmFtZSI7czo2OiJuaGFpZHQiO3M6ODoicGFzc3dvcmQiO3M6NDA6IjcxNWY5NTI1YThjMzJjZGNlYzg1ZmNhZWQ1MDYyYTU3NGFiNjIxMmMiO3M6NDoicm9sZSI7czo1OiJhZG1pbiI7czozOiJkb2IiO3M6MTA6IjIwMTctMDQtMDMiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxNy0wNC0wMyAwNDo1Mzo1OCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNy0wNC0wMyAwNDo1Mzo1OCI7fX19czo0OiJ1c2VyIjtzOjE6IjEiO3M6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czo2MTk4OiI8ZGl2IGlkPSJzaWRlYmFyIj4NCiAgICA8ZGl2IGlkPSJzZWFyY2giPg0KICAgICAgICA8aDI+U2VhcmNoPC9oMj4NCiAgICAgICAgPGZvcm0gYWN0aW9uPSIjIj4NCiAgICAgICAgICAgIDxkaXYgaWQ9InNlYXJjaGZpZWxkIj4NCiAgICAgICAgICAgICAgICA8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0ia2V5d29yZCIgY2xhc3M9ImtleXdvcmQiIC8+DQogICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgPC9mb3JtPg0KICAgIDwvZGl2Pg0KPC9kaXY+PCEtLSBTVEFSVCBQQUdFIFNPVVJDRSAtLT4NCiAgICA8ZGl2IGlkPSJjb250ZW50Ij4NCiAgICAgICAgPGRpdiBjbGFzcz0ibm90aWZpY2F0aW9uIj4NCiAgICAgICAgICAgIDxoMj48L2gyPg0KICAgICAgICAgICAgPGgyPjwvaDI+DQogICAgICAgICAgICA8aDI+PC9oMj4NCiAgICAgICAgICAgIDxoMj48L2gyPg0KICAgICAgICAgICAgPGgyPjwvaDI+DQogICAgICAgICAgICA8aDI+PC9oMj4NCiAgICAgICAgICAgIDxoMj48L2gyPg0KICAgICAgICA8L2Rpdj4NCiAgICAgIDxkaXYgaWQ9ImxlZnQiPg0KICAgICAgICA8ZGl2IGNsYXNzPSJwb3N0Ij4NCiAgICAgICAgICAgIDwhLS1ub2NhY2hlOjAwMi0tPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0icG9zdGxlZnQiPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0icG9zdGRhdGUiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJkYXkiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAwNyAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9Im1vbnRoIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgQXByICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc3Bhbj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29tbWVudHMiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cD4NCg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgc3JjPSIvUmV2aWV3L2ltZy92aWV3LnBuZyIgYWx0PSJ2aWV3IiB3aWR0aD0iMjUiIGhlaWdodD0iMjUiIC8+ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9IiMiIGNsYXNzPSJ2aWV3Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgNiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2E+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9wPg0KICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InBvc3Rjb250ZW50Ij4NCiAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJwb3N0aGVhZGVyIj4NCiAgICAgICAgICAgICAgICAgICAgICA8aDI+DQogICAgICAgICAgICAgICAgICAgICAgICAgIDxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9uZXctdGl0bGUiPm5ldyB0aXRsZTwvYT4gICAgICAgICAgICAgICAgICAgICAgPC9oMj4NCg0KICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJwb3N0bWV0YSI+DQogICAgICAgICAgICAgICAgICAgICAgICAgIEJ5IG5oYWlkdCAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+DQoNCiAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICA8cD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgQ2FrZVBIUCBhbHNvIG1ha2VzIHVzZSBvZiDigJhyZXZlcnNlIHJvdXRpbmfigJkuIElmLCB3aXRoIHRoZSBhYm92ZSByb3V0ZSBkZWZpbmVkLCB5b3UgcGFzcyBhcnJheSgnY29udHJvbGxlcicgPT4gJ3Bvc3RzJywgJ2FjdGlvbicgPT4gJ2luZGV4JykgdG8gYSBmdW5jdGlvbiBleHBlY3RpbmcgYW4gYXJyYXksIHRoZSByZXN1bHRpbmcgVVJMIHVzZWQuLi4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0icmVhZG1vcmUiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvbmV3LXRpdGxlIj5yZWFkIG1vcmU8L2E+ICAgICAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvcD4NCiAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgICAgICAgPCEtLS9ub2NhY2hlLS0+DQogICAgICAgIDwvZGl2Pg0KICAgICAgICA8ZGl2IGNsYXNzPSJwYWdpbmF0aW9uIGNsZWFyIj4NCiAgICAgICAgICA8ZGl2IGNsYXNzPSJwcmUiPg0KICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0icHJldiBkaXNhYmxlZCI+PC9zcGFuPiAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICA8ZGl2IGNsYXNzPSJuZXh0Ij4NCiAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9Im5leHQgZGlzYWJsZWQiPjwvc3Bhbj4gICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZGl2Pg0KICAgICAgPC9kaXY+DQo8ZGl2IGlkPSJzaWRlYmFyIj4NCjwhLS0gICAgLS0+ICAgIDxkaXYgaWQ9InNiX2NvbnRhaW5lciI+DQogICAgICAgICAgICAgICAgICAgIDxoMj4NCiAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0ibGlzdF91c2VyIj4NCiAgICAgICAgICAgICAgICAgICAgPGEgaHJlZj0iL1Jldmlldy9wb3N0cy9hZGQiPkFkZCBuZXcgcG9zdDwvYT4gICAgICAgICAgICAgICAgPC9zcGFuPg0KICAgICAgICAgICAgPC9oMj4NCiAgICAgICAgICAgICAgICA8aDI+DQogICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJsaXN0X3VzZXIiPg0KICAgICAgICAgICAgICAgICAgPGEgaHJlZj0iL1Jldmlldy91c2VycyI+TGlzdCB1c2VyczwvYT4gICAgICAgICAgICAgIDwvc3Bhbj4NCiAgICAgICAgPC9oMj4NCiAgICAgICAgPGgyPg0KICAgICAgICAgICAgPHNwYW4gY2xhc3M9Imxpc3RfdXNlciI+DQogICAgICAgICAgICAgICAgPGEgaHJlZj0iIyIgb25jbGljaz0icmV0dXJuIGZhbHNlOyI+T2xkZXIgUG9zdHM8L2E+ICAgICAgICAgICAgPC9zcGFuPjwvaDI+DQogICAgICAgIDxkaXYgY2xhc3M9InBvc3RzIj4NCiAgICAgICAgICAgIDx1bD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL2VtLWtob25nLWxhLWR1eS1uaGF0Ij5lbSBraMO0bmcgbMOgIGR1eSBuaOG6pXQ8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvYWQtamFzZGZrcy1qa2RzLXNkamRmIj5hZCBqYXNkZmtzIGprZHMgc2RqZGY8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvaGVsbG8td29ybGQiPkhlbGxvIFdvcmxkPC9hPjwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL2phc2YtYXNoZC1rYXNoZi1iYXNuaC1yYXNuIj5qYXNmIGFzaGQga2FzaGYgYmFzbmggcmFzbjwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9kZmFzZmQiPmRmYXNmZDwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9uaGEtcGh1b25nIj5uaGEgcGh1b25nIDwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9naW90LW5hbmctYmVuLXRoZW0iPmdpb3QgbmFuZyBiZW4gdGhlbSAxMjM0PC9hPjwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL3RoYW5nLTQtbGEtbG9pLW5vaS1kb2ktY3VhLWVtIj50aGFuZyA0IGxhIGxvaSBub2kgZG9pIGN1YTwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy91c2luZy1wbHVnaW4tc2x1Z2dhYmxlLWluLWNha2VwaHAiPnVzaW5nIHBsdWdpbiBzbHVnZ2FibGUgaW4gY2FrZXBocDwvYT48L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9SZXZpZXcvcG9zdHMvdGluLXR1Yy9obi1yLWdmIj5obiByIGdmIGYgaGdoPC9hPjwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3VsPg0KICAgICAgICA8L2Rpdj4NCiAgICAgICAgPGgyPg0KICAgICAgICAgICAgPHNwYW4gY2xhc3M9Imxpc3RfdXNlciI+DQogICAgICAgICAgICAgICAgPGEgaHJlZj0iIyIgb25jbGljaz0icmV0dXJuIGZhbHNlOyI+TGF0ZXN0IFBvc3RzPC9hPiAgICAgICAgICAgIDwvc3Bhbj4NCiAgICAgICAgPC9oMj4NCiAgICAgICAgPCEtLW5vY2FjaGU6MDAxLS0+DQogICAgICAgIDxkaXYgY2xhc3M9InBvc3RzIiBpZD0ibGF0ZXN0Ij4NCiAgICAgICAgICAgIDx1bD4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL2Fsb25lLWFsb25lLTEyMyI+YWxvbmUgYWxvbmUgMTIzPC9hPjwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL2NvZGUtYW5kcm9pZC0xMiI+Y29kZSBhbmRyb2lkIDEyPC9hPjwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL2FqZi1qYXNkLWZqLWZzZi0xMjMiPmFqZiBqYXNkIGZqIGZzZiAxMjM8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvYXNkZi1mYWQtMTIzIj5hc2RmICBmYWQgMTIzPC9hPjwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL2FyaWFuYS1ncmFuZGUiPmFyaWFuYSBncmFuZGU8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvbmV3LXRpdGxlIj5uZXcgdGl0bGU8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvd2UtZG9udC10YWxrLWFueW1vcmUiPndlIGRvbnQgdGFsayBhbnltb3JlPC9hPjwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL25oYWktMTIzNCI+bmhhaSAxMjM0PC9hPjwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGk+PGEgaHJlZj0iL1Jldmlldy9wb3N0cy90aW4tdHVjL2FzZGYtYXNmZGYiPmFzZGYgYXNmZGY8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvYS1saXR0ZS1ib3kiPmEgbGl0dGUgYm95IDEyMyA0NTY8L2E+PC9hPjwvbGk+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdWw+DQogICAgICAgIDwvZGl2Pg0KICAgICAgICA8IS0tL25vY2FjaGUtLT4NCiAgICA8L2Rpdj4NCjwvZGl2Pg0KPGRpdiBjbGFzcz0iY2xlYXIiPjwvZGl2Pg0KPC9kaXY+DQo8L2Rpdj4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6NToiUG9zdHMiO30='));
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