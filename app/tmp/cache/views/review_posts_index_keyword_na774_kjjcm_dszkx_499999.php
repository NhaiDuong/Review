<!--cachetime:1491230324--><?php
			App::uses('PostsController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjc6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToicG9zdHMiO3M6NjoiYWN0aW9uIjtzOjU6ImluZGV4IjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MDp7fXM6NjoicGFnaW5nIjthOjE6e3M6NDoiUG9zdCI7YToxMDp7czo0OiJwYWdlIjtpOjE7czo3OiJjdXJyZW50IjtpOjE7czo1OiJjb3VudCI7aToxO3M6ODoicHJldlBhZ2UiO2I6MDtzOjg6Im5leHRQYWdlIjtiOjA7czo5OiJwYWdlQ291bnQiO2k6MTtzOjU6Im9yZGVyIjtOO3M6NToibGltaXQiO2k6MTA7czo3OiJvcHRpb25zIjthOjA6e31zOjk6InBhcmFtVHlwZSI7czo1OiJuYW1lZCI7fX1zOjY6Im1vZGVscyI7YToyOntzOjQ6IlBvc3QiO2E6Mjp7czo2OiJwbHVnaW4iO047czo5OiJjbGFzc05hbWUiO3M6NDoiUG9zdCI7fXM6NDoiVXNlciI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJVc2VyIjt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MTp7czo3OiJrZXl3b3JkIjtzOjI0OiJOYTc3NCBrampDTSBEc3pLWCA0OTk5OTkiO31zOjM6InVybCI7czoxMToicG9zdHMvaW5kZXgiO3M6NDoiYmFzZSI7czo3OiIvUmV2aWV3IjtzOjc6IndlYnJvb3QiO3M6ODoiL1Jldmlldy8iO3M6NDoiaGVyZSI7czoxOToiL1Jldmlldy9wb3N0cy9pbmRleCI7czoxMzoiACoAX2RldGVjdG9ycyI7YToxMTp7czozOiJnZXQiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjM6IkdFVCI7fXM6NDoicG9zdCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiUE9TVCI7fXM6MzoicHV0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJQVVQiO31zOjY6ImRlbGV0ZSI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NjoiREVMRVRFIjt9czo0OiJoZWFkIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo0OiJIRUFEIjt9czo3OiJvcHRpb25zIjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czo3OiJPUFRJT05TIjt9czozOiJzc2wiO2E6Mjp7czozOiJlbnYiO3M6NToiSFRUUFMiO3M6NToidmFsdWUiO2k6MTt9czo0OiJhamF4IjthOjI6e3M6MzoiZW52IjtzOjIxOiJIVFRQX1hfUkVRVUVTVEVEX1dJVEgiO3M6NToidmFsdWUiO3M6MTQ6IlhNTEh0dHBSZXF1ZXN0Ijt9czo1OiJmbGFzaCI7YToyOntzOjM6ImVudiI7czoxNToiSFRUUF9VU0VSX0FHRU5UIjtzOjc6InBhdHRlcm4iO3M6MjY6Ii9eKFNob2Nrd2F2ZXxBZG9iZSkgRmxhc2gvIjt9czo2OiJtb2JpbGUiO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJvcHRpb25zIjthOjI2OntpOjA7czo3OiJBbmRyb2lkIjtpOjE7czo3OiJBdmFudEdvIjtpOjI7czoxMDoiQmxhY2tCZXJyeSI7aTozO3M6NjoiRG9Db01vIjtpOjQ7czo2OiJGZW5uZWMiO2k6NTtzOjQ6ImlQb2QiO2k6NjtzOjY6ImlQaG9uZSI7aTo3O3M6NDoiaVBhZCI7aTo4O3M6NDoiSjJNRSI7aTo5O3M6NDoiTUlEUCI7aToxMDtzOjg6Ik5ldEZyb250IjtpOjExO3M6NToiTm9raWEiO2k6MTI7czoxMDoiT3BlcmEgTWluaSI7aToxMztzOjEwOiJPcGVyYSBNb2JpIjtpOjE0O3M6NjoiUGFsbU9TIjtpOjE1O3M6MTA6IlBhbG1Tb3VyY2UiO2k6MTY7czo5OiJwb3J0YWxtbW0iO2k6MTc7czo3OiJQbHVja2VyIjtpOjE4O3M6MTQ6IlJlcXdpcmVsZXNzV2ViIjtpOjE5O3M6MTI6IlNvbnlFcmljc3NvbiI7aToyMDtzOjc6IlN5bWJpYW4iO2k6MjE7czoxMToiVVBcLkJyb3dzZXIiO2k6MjI7czo1OiJ3ZWJPUyI7aToyMztzOjEwOiJXaW5kb3dzIENFIjtpOjI0O3M6MTY6IldpbmRvd3MgUGhvbmUgT1MiO2k6MjU7czo1OiJYaWlubyI7fX1zOjk6InJlcXVlc3RlZCI7YToyOntzOjU6InBhcmFtIjtzOjk6InJlcXVlc3RlZCI7czo1OiJ2YWx1ZSI7aToxO319czo5OiIAKgBfaW5wdXQiO3M6MDoiIjt9'));
				$response->type('text/html');
				$controller = new PostsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjQ6Ikh0bWwiO047czo0OiJGb3JtIjtOO3M6NToiQ2FjaGUiO047aTowO3M6OToiUGFnaW5hdG9yIjt9'));
				$controller->layout = $this->layout = 'layout';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjY6ImxhdGVzdCI7YToxMDp7aTowO2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjQ6IjJMV09KIHUwRXBxIHBUOFAwIDQ5OTg3OSI7czo0OiJzbHVnIjtzOjI0OiIybHdvai11MGVwcS1wdDhwMC00OTk4NzkiO319aToxO2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjQ6IjVsTjJyIHRDWGVlIGxpTjQ0IDQ5OTg4NSI7czo0OiJzbHVnIjtzOjI0OiI1bG4yci10Y3hlZS1saW40NC00OTk4ODUiO319aToyO2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjQ6InB2bFVpIGlKS0syIE1ybXNSIDQ5OTg4MyI7czo0OiJzbHVnIjtzOjI0OiJwdmx1aS1pamtrMi1tcm1zci00OTk4ODMiO319aTozO2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjQ6IlJlaW5nIDM3MGNBIHhyRG9lIDQ5OTg4MiI7czo0OiJzbHVnIjtzOjI0OiJyZWluZy0zNzBjYS14cmRvZS00OTk4ODIiO319aTo0O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjQ6Ik5hNzc0IGtqakNNIERzektYIDQ5OTk5OSI7czo0OiJzbHVnIjtzOjI0OiJuYTc3NC1rampjbS1kc3preC00OTk5OTkiO319aTo1O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjQ6ImFKSmY2IG1pbnpwIDU5Tkc0IDQ5OTg4OCI7czo0OiJzbHVnIjtzOjI0OiJhampmNi1taW56cC01OW5nNC00OTk4ODgiO319aTo2O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjQ6IkdWZ1NXIHh2THZJIFlHOE1iIDQ5OTg4NCI7czo0OiJzbHVnIjtzOjI0OiJndmdzdy14dmx2aS15ZzhtYi00OTk4ODQiO319aTo3O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjQ6IkdYVDNaIGxhcW5TIGZaSHhMIDQ5OTg4MSI7czo0OiJzbHVnIjtzOjI0OiJneHQzei1sYXFucy1memh4bC00OTk4ODEiO319aTo4O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjQ6IkdGeDVSIEszVEcwIDZ4aEV3IDQ5OTg4NyI7czo0OiJzbHVnIjtzOjI0OiJnZng1ci1rM3RnMC02eGhldy00OTk4ODciO319aTo5O2E6MTp7czo0OiJQb3N0IjthOjI6e3M6NToidGl0bGUiO3M6MjQ6IlpMaG9NIGM4QmNSIE1NcXlhIDQ5OTg4MCI7czo0OiJzbHVnIjtzOjI0OiJ6bGhvbS1jOGJjci1tbXF5YS00OTk4ODAiO319fXM6NToicG9zdHMiO2E6MTp7aTowO2E6Mjp7czo0OiJQb3N0IjthOjg6e3M6MjoiaWQiO3M6NjoiNDk5OTk5IjtzOjU6InRpdGxlIjtzOjI0OiJOYTc3NCBrampDTSBEc3pLWCA0OTk5OTkiO3M6NDoiYm9keSI7czoyNTU6Inh1V0MyIHRCc1Q3cCBPQndDIHg3Z1dYIFVzQVdYSCBnUEkzIGRzOTk5IDlMM2hNdCBua0dOIGN3SUY3IHpiemZIWSB0OUNvIFFWeWpFIGJlNG0xUSB1VzA4IFdSZ2pnIDZtNU03byBIbVNZIFJrUWJNIHkxQmJsUCBtaHpoIDFOek9HIFhicFh0SyB3Vno4IDlhWUVKIE5TYWdvMCAwYjRBIDF1cGx6IER1dXVBVyBLNk9PIGtoaUtXIGx1TlE5biB6SDJwIGFNUnphIExYa0dUOSBEaVRQIFk2V05qIEdPcDdhRyB2bTZoIHN2Q1E0IHhpNEhUZSBiZHoxIFRWMSI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDE3LTA0LTAzIDAzOjEwOjIxIjtzOjQ6InNsdWciO3M6MjQ6Im5hNzc0LWtqamNtLWRzemt4LTQ5OTk5OSI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxNy0wNC0wMyAwMzoxMDoyMSI7czo3OiJ1c2VyX2lkIjtzOjE6IjEiO3M6OToidmlld0NvdW50IjtzOjE6IjAiO31zOjQ6IlVzZXIiO2E6Nzp7czoyOiJpZCI7TjtzOjg6InVzZXJuYW1lIjtOO3M6ODoicGFzc3dvcmQiO047czo0OiJyb2xlIjtOO3M6MzoiZG9iIjtOO3M6NzoiY3JlYXRlZCI7TjtzOjg6Im1vZGlmaWVkIjtOO319fXM6MTg6ImNvbnRlbnRfZm9yX2xheW91dCI7czo0Mjk2OiI8dGFibGUgY2xhc3M9ImNha2Utc3FsLWxvZyIgaWQ9ImNha2VTcWxMb2dfMTQ5MTE5NDMyNDU4ZTFkMWQ0M2U4ZmY0XzA2MTg5OTI5IiBzdW1tYXJ5PSJDYWtlIFNRTCBMb2ciIGNlbGxzcGFjaW5nPSIwIj48Y2FwdGlvbj4oZGVmYXVsdCkgNCBxdWVyaWVzIHRvb2sgMTUyNCBtczwvY2FwdGlvbj4JPHRoZWFkPgoJCTx0cj48dGg+TnI8L3RoPjx0aD5RdWVyeTwvdGg+PHRoPkVycm9yPC90aD48dGg+QWZmZWN0ZWQ8L3RoPjx0aD5OdW0uIHJvd3M8L3RoPjx0aD5Ub29rIChtcyk8L3RoPjwvdHI+Cgk8L3RoZWFkPgoJPHRib2R5PgoJPHRyPjx0ZD4xPC90ZD48dGQ+U0VMRUNUIGBQb3N0YC5gaWRgLCBgUG9zdGAuYHRpdGxlYCwgYFBvc3RgLmBib2R5YCwgYFBvc3RgLmBjcmVhdGVkYCwgYFBvc3RgLmBzbHVnYCwgYFBvc3RgLmBtb2RpZmllZGAsIGBQb3N0YC5gdXNlcl9pZGAsIGBQb3N0YC5gdmlld0NvdW50YCwgYFVzZXJgLmBpZGAsIGBVc2VyYC5gdXNlcm5hbWVgLCBgVXNlcmAuYHBhc3N3b3JkYCwgYFVzZXJgLmByb2xlYCwgYFVzZXJgLmBkb2JgLCBgVXNlcmAuYGNyZWF0ZWRgLCBgVXNlcmAuYG1vZGlmaWVkYCBGUk9NIGBibG9nc2AuYHBvc3RzYCBBUyBgUG9zdGAgTEVGVCBKT0lOIGBibG9nc2AuYHVzZXJzYCBBUyBgVXNlcmAgT04gKGBQb3N0YC5gdXNlcl9pZGAgPSBgVXNlcmAuYGlkYCkgIFdIRVJFIGBQb3N0YC5gdGl0bGVgID0gJiMwMzk7TmE3NzQga2pqQ00gRHN6S1ggNDk5OTk5JiMwMzk7PC90ZD48dGQ+PC90ZD48dGQgc3R5bGU9InRleHQtYWxpZ246IHJpZ2h0Ij4xPC90ZD48dGQgc3R5bGU9InRleHQtYWxpZ246IHJpZ2h0Ij4xPC90ZD48dGQgc3R5bGU9InRleHQtYWxpZ246IHJpZ2h0Ij4xNDg8L3RkPjwvdHI+Cjx0cj48dGQ+MjwvdGQ+PHRkPlNFTEVDVCBgUG9zdGAuYGlkYCwgYFBvc3RgLmB0aXRsZWAsIGBQb3N0YC5gYm9keWAsIGBQb3N0YC5gY3JlYXRlZGAsIGBQb3N0YC5gc2x1Z2AsIGBQb3N0YC5gbW9kaWZpZWRgLCBgUG9zdGAuYHVzZXJfaWRgLCBgUG9zdGAuYHZpZXdDb3VudGAsIGBVc2VyYC5gaWRgLCBgVXNlcmAuYHVzZXJuYW1lYCwgYFVzZXJgLmBwYXNzd29yZGAsIGBVc2VyYC5gcm9sZWAsIGBVc2VyYC5gZG9iYCwgYFVzZXJgLmBjcmVhdGVkYCwgYFVzZXJgLmBtb2RpZmllZGAgRlJPTSBgYmxvZ3NgLmBwb3N0c2AgQVMgYFBvc3RgIExFRlQgSk9JTiBgYmxvZ3NgLmB1c2Vyc2AgQVMgYFVzZXJgIE9OIChgUG9zdGAuYHVzZXJfaWRgID0gYFVzZXJgLmBpZGApICBXSEVSRSBgUG9zdGAuYHRpdGxlYCA9ICYjMDM5O05hNzc0IGtqakNNIERzektYIDQ5OTk5OSYjMDM5OyAgICBMSU1JVCAxMDwvdGQ+PHRkPjwvdGQ+PHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiByaWdodCI+MTwvdGQ+PHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiByaWdodCI+MTwvdGQ+PHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiByaWdodCI+MDwvdGQ+PC90cj4KPHRyPjx0ZD4zPC90ZD48dGQ+U0VMRUNUIENPVU5UKCopIEFTIGBjb3VudGAgRlJPTSBgYmxvZ3NgLmBwb3N0c2AgQVMgYFBvc3RgIExFRlQgSk9JTiBgYmxvZ3NgLmB1c2Vyc2AgQVMgYFVzZXJgIE9OIChgUG9zdGAuYHVzZXJfaWRgID0gYFVzZXJgLmBpZGApICBXSEVSRSBgUG9zdGAuYHRpdGxlYCA9ICYjMDM5O05hNzc0IGtqakNNIERzektYIDQ5OTk5OSYjMDM5OzwvdGQ+PHRkPjwvdGQ+PHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiByaWdodCI+MTwvdGQ+PHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiByaWdodCI+MTwvdGQ+PHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiByaWdodCI+MDwvdGQ+PC90cj4KPHRyPjx0ZD40PC90ZD48dGQ+U0VMRUNUIGBQb3N0YC5gdGl0bGVgLCBgUG9zdGAuYHNsdWdgIEZST00gYGJsb2dzYC5gcG9zdHNgIEFTIGBQb3N0YCAgIFdIRVJFIDEgPSAxICAgT1JERVIgQlkgYFBvc3RgLmBtb2RpZmllZGAgZGVzYyAgTElNSVQgMTA8L3RkPjx0ZD48L3RkPjx0ZCBzdHlsZT0idGV4dC1hbGlnbjogcmlnaHQiPjEwPC90ZD48dGQgc3R5bGU9InRleHQtYWxpZ246IHJpZ2h0Ij4xMDwvdGQ+PHRkIHN0eWxlPSJ0ZXh0LWFsaWduOiByaWdodCI+MTM3NjwvdGQ+PC90cj4KCTwvdGJvZHk+PC90YWJsZT4KCTwhLS0gU1RBUlQgUEFHRSBTT1VSQ0UgLS0+DQogICAgPGRpdiBpZD0iY29udGVudCI+DQogICAgICAgIDxkaXYgY2xhc3M9Im5vdGlmaWNhdGlvbiI+DQogICAgICAgICAgICA8aDI+PC9oMj4NCiAgICAgICAgICAgIDxoMj48L2gyPg0KICAgICAgICAgICAgPGgyPjwvaDI+DQogICAgICAgICAgICA8aDI+PC9oMj4NCiAgICAgICAgICAgIDxoMj48L2gyPg0KICAgICAgICAgICAgPGgyPjwvaDI+DQogICAgICAgICAgICA8aDI+PC9oMj4NCiAgICAgICAgPC9kaXY+DQogICAgICA8ZGl2IGlkPSJsZWZ0Ij4NCiAgICAgICAgPGRpdiBjbGFzcz0icG9zdCI+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InBvc3RsZWZ0Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9InBvc3RkYXRlIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0iZGF5Ij4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgMDMgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zcGFuPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPSJtb250aCI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIEFwciAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+DQogICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9ImNvbW1lbnRzIj4NCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHA+DQoNCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW1nIHNyYz0iL1Jldmlldy9pbWcvdmlldy5wbmciIGFsdD0idmlldyIgd2lkdGg9IjI1IiBoZWlnaHQ9IjI1IiAvPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSIjIiBjbGFzcz0idmlldyI+DQogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9hPg0KDQogICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvcD4NCiAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPSJwb3N0Y29udGVudCI+DQogICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz0icG9zdGhlYWRlciI+DQogICAgICAgICAgICAgICAgICAgICAgPGgyPg0KICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvbmE3NzQta2pqY20tZHN6a3gtNDk5OTk5Ij5OYTc3NCBrampDTSBEc3pLWCA0OTk5OTk8L2E+ICAgICAgICAgICAgICAgICAgICAgIDwvaDI+DQogICAgICAgICAgICAgICAgICAgICAgPC9kaXY+DQogICAgICAgICAgICAgICAgICAgICAgPHA+eHVXQzIgdEJzVDdwIE9Cd0MgeDdnV1ggVXNBV1hIIGdQSTMgZHM5OTkgOUwzaE10IG5rR04gY3dJRjcgemJ6ZkhZIHQ5Q28gUVZ5akUgYmU0bTFRIHVXMDggV1JnamcgNm01TTdvIEhtU1kgUmtRYk0geTFCYmxQIG1oemggMU56T0cgWGJwWHRLIHdWejggOWFZRUogTlNhZ28wIDBiNEEgMXVwbHogRHV1dUFXIEs2T08ga2hpS1cgbHVOUTluIHpIMnAgYU1SemEgTFhrR1Q5IERpVFAgWTZXTmogR09wN2FHIHZtNmggc3ZDUTQgeGk0SFRlIGJkejEgVFYxICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0icmVhZG1vcmUiPg0KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8YSBocmVmPSIvUmV2aWV3L3Bvc3RzL3Rpbi10dWMvbmE3NzQta2pqY20tZHN6a3gtNDk5OTk5Ij5yZWFkIG1vcmU8L2E+ICAgICAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+DQogICAgICAgICAgICAgICAgICAgIDwvcD4NCiAgICAgICAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgDQogICAgICAgIDwvZGl2Pg0KICAgICAgICA8ZGl2IGNsYXNzPSJwYWdpbmF0aW9uIGNsZWFyIj4NCiAgICAgICAgICA8ZGl2IGNsYXNzPSJwcmUiPg0KICAgICAgICAgICAgICA8c3BhbiBjbGFzcz0icHJldiBkaXNhYmxlZCI+PC9zcGFuPiAgICAgICAgICA8L2Rpdj4NCiAgICAgICAgICA8ZGl2IGNsYXNzPSJuZXh0Ij4NCiAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9Im5leHQgZGlzYWJsZWQiPjwvc3Bhbj4gICAgICAgICAgPC9kaXY+DQogICAgICAgIDwvZGl2Pg0KICAgICAgPC9kaXY+DQoiO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6NToiUG9zdHMiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$controller->constructClasses();
				$controller->startupProcess();
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?>

<!DOCTYPE html>
<html>
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        <title>
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
                    
                    <li>
                        <?php
                        if (isset($user)){
                            echo $this->Html->link(__('Logout'),'/users/logout',array());
                        }
                        else
                            echo $this->Html->link(__('Login'),'/users/login',array());
                        ?>
                    </li>
                </ul>
                <ul id="lang">
                    <li>
                        <?php
                        if (isset($user)) {
                            echo $this->Html->link(__('Eng'), array('language' => 'eng'));
                            echo "|";
                            echo $this->Html->link(__('Vie'), array('language' => 'vie'));
                        }
                        ?>
                    </li>
                </ul>
                
            </div>
            <div id="header">
                <div id="featuredpost">
                    <div id="featuredthumb">
                        <img src="/Review/img/featuredimage.jpg" alt="featuredimage" class="shadow" width="200" height="135" />                    </div>
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
            </div>
        <table class="cake-sql-log" id="cakeSqlLog_149119432458e1d1d43e8ff4_06189929" summary="Cake SQL Log" cellspacing="0"><caption>(default) 4 queries took 1524 ms</caption>	<thead>
		<tr><th>Nr</th><th>Query</th><th>Error</th><th>Affected</th><th>Num. rows</th><th>Took (ms)</th></tr>
	</thead>
	<tbody>
	<tr><td>1</td><td>SELECT `Post`.`id`, `Post`.`title`, `Post`.`body`, `Post`.`created`, `Post`.`slug`, `Post`.`modified`, `Post`.`user_id`, `Post`.`viewCount`, `User`.`id`, `User`.`username`, `User`.`password`, `User`.`role`, `User`.`dob`, `User`.`created`, `User`.`modified` FROM `blogs`.`posts` AS `Post` LEFT JOIN `blogs`.`users` AS `User` ON (`Post`.`user_id` = `User`.`id`)  WHERE `Post`.`title` = &#039;Na774 kjjCM DszKX 499999&#039;</td><td></td><td style="text-align: right">1</td><td style="text-align: right">1</td><td style="text-align: right">148</td></tr>
<tr><td>2</td><td>SELECT `Post`.`id`, `Post`.`title`, `Post`.`body`, `Post`.`created`, `Post`.`slug`, `Post`.`modified`, `Post`.`user_id`, `Post`.`viewCount`, `User`.`id`, `User`.`username`, `User`.`password`, `User`.`role`, `User`.`dob`, `User`.`created`, `User`.`modified` FROM `blogs`.`posts` AS `Post` LEFT JOIN `blogs`.`users` AS `User` ON (`Post`.`user_id` = `User`.`id`)  WHERE `Post`.`title` = &#039;Na774 kjjCM DszKX 499999&#039;    LIMIT 10</td><td></td><td style="text-align: right">1</td><td style="text-align: right">1</td><td style="text-align: right">0</td></tr>
<tr><td>3</td><td>SELECT COUNT(*) AS `count` FROM `blogs`.`posts` AS `Post` LEFT JOIN `blogs`.`users` AS `User` ON (`Post`.`user_id` = `User`.`id`)  WHERE `Post`.`title` = &#039;Na774 kjjCM DszKX 499999&#039;</td><td></td><td style="text-align: right">1</td><td style="text-align: right">1</td><td style="text-align: right">0</td></tr>
<tr><td>4</td><td>SELECT `Post`.`title`, `Post`.`slug` FROM `blogs`.`posts` AS `Post`   WHERE 1 = 1   ORDER BY `Post`.`modified` desc  LIMIT 10</td><td></td><td style="text-align: right">10</td><td style="text-align: right">10</td><td style="text-align: right">1376</td></tr>
	</tbody></table>
	<!-- START PAGE SOURCE -->
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

                              <div class="postleft">
                        <div class="postdate">
                            <span class="day">
                                03                            </span>
                            <span class="month">
                                Apr                            </span>
                        </div>
                        <div class="comments">
                             <p>

                                  <img src="/Review/img/view.png" alt="view" width="25" height="25" />                                  <a href="#" class="view">
                                      0                                  </a>

                             </p>
                        </div>
                  </div>
                  <div class="postcontent">
                      <div class="postheader">
                      <h2>
                          <a href="/Review/posts/tin-tuc/na774-kjjcm-dszkx-499999">Na774 kjjCM DszKX 499999</a>                      </h2>
                      </div>
                      <p>xuWC2 tBsT7p OBwC x7gWX UsAWXH gPI3 ds999 9L3hMt nkGN cwIF7 zbzfHY t9Co QVyjE be4m1Q uW08 WRgjg 6m5M7o HmSY RkQbM y1BblP mhzh 1NzOG XbpXtK wVz8 9aYEJ NSago0 0b4A 1uplz DuuuAW K6OO khiKW luNQ9n zH2p aMRza LXkGT9 DiTP Y6WNj GOp7aG vm6h svCQ4 xi4HTe bdz1 TV1                          <span class="readmore">
                                <a href="/Review/posts/tin-tuc/na774-kjjcm-dszkx-499999">read more</a>                          </span>
                    </p>
                  </div>
            
        </div>
        <div class="pagination clear">
          <div class="pre">
              <span class="prev disabled"></span>          </div>
          <div class="next">
              <span class="next disabled"></span>          </div>
        </div>
      </div>
            <div id="sidebar">
                <div id="search">
                    <h2>Search</h2>
                    <form action="#">
                        <div id="searchfield">
                            <input type="text" name="keyword" class="keyword" />
                        </div>
                    </form>
                </div>
                <div id="sb_container">
                                        <h2>
                          <span class="list_user">
                              <a href="/Review/users">List users</a>                          </span>
                    </h2>
                    <h2><span class="list_user">
                            <a href="#" onclick="return false;">Older Posts</a>                        </span></h2>
                    <div class="posts">
                        <ul>
                                                                <li><a href="/Review/posts/tin-tuc/s40wf-3rzla-8wx0o-30">s40Wf 3rzLa 8WX0O 30</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/8rohk-tuvop-qctvd-29">8rOhK tuvoP qCTvd 29</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/iaeow-apg2j-7w4sl-28">iaEow apg2j 7w4sL 28</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/fli5p-jb3o2-kcstb-27">Fli5P Jb3o2 kCstB 27</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/mrswj-5umqr-vrlfr-26">MRSwJ 5UMqR vrlfR 26</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/r3prp-bc4yw-fseis-25">R3pRP Bc4Yw FsEiS 25</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/v01ij-egabl-korws-24">v01ij eGabL kORWs 24</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/ptkjw-ejzxh-9rjjk-23">pTKJw eJZXh 9RjJk 23</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/42f59-6dkvb-k7795-22">42f59 6DkvB k7795 22</a></a></li>
                                                                    <li><a href="/Review/posts/tin-tuc/qevz1-i1u1f-6mh5l-21">Qevz1 i1u1f 6mH5l 21</a></a></li>
                                                        </ul>
                    </div>
                    <h2>
                        <span class="list_user">
                            <a href="#" onclick="return false;">Latest Posts</a>                        </span>
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
    </div>
    <div id="bottom">
        <div id="container">
            <div id="about">
                <div id="authorimage">
                    <img src="/Review/img/authorimg.png" width="108" height="108" alt="" />                </div>
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
