# tmobile-usage
A PHP script that programmatically pulls T-Mobile usage data
### Usage:
```php tmobile-usage.php USERNAME PASSWORD [OUTPATH]```

### Returns:
    {  
       "Msisdn":"0000000000",
       "SubscriberType":"POSTPAID",
       "IsPooled":true,
       "IsMultiLine":true,
       "IsPAH":false,
       "UsedMins":256,
       "TotalMins":-1,
       "UsedMsgs":0,
       "TotalMsgs":0,
       "DownloadAmount":0,
       "LastKnownDateTime":"12\/24\/2015 1:35:55 PM",
       "NextBillingCycleDate":"1\/10\/2016",
       "Flexpay_AmountUsed":0,
       "Flexpay_BalanceAmount":null,
       "SubscriberPrivilege":"M",
       "SubscriberName":"Herp",
       "LinesUsage":[  
          {  
             "Msisdn":"0000000000",
             "TotalMins":-1,
             "UsedMins":256,
             "TotalMsgs":-1,
             "UsedMsgs":0,
             "NumDownloads":0,
             "DownloadAmount":0,
             "Flexpay_AmountUsed":0,
             "Flexpay_BalanceAmount":0,
             "SubscriberName":"Herp",
             "MessageServiceName":null,
             "HasMessageService":false,
             "IsAtHome":false,
             "HasData":true,
             "HasDPFData":false,
             "TotalData":9999999,
             "UsedData":3372.80371,
             "TotalDPFCharge":0,
             "UpsellLimit":9999999,
             "IsData":false,
             "ThrottleLimitStatus":false,
             "UpsellLimitStatus":false,
             "WarningMessage":"",
             "ThrottleThresholdPercentage":"0",
             "DataOverageRate":0,
             "IsSuspended":false,
             "RestoreDate":null,
             "StatusReasonCode":null,
             "StatusReasonDesc":null,
             "SuspensionDate":null,
             "ThrottleLimit":"0.0",
             "HasLimit":true,
             "DPFFlag":true,
             "DataUsageLink":"Data: 3.3 GB \/ Unlimited",
             "HighSpeedLink":null,
             "ThrottleLimitWidth":null,
             "DataGauge":{  
                "Allotment":"-1",
                "Max":"10240",
                "Threshold":"0.0",
                "Used":"3372.804"
             },
             "IsMobileBroadbandLine":false,
             "UpsellLink":null,
             "HasPPMBService":false
          }
       ],
       "HasFamilyAllowance":false,
       "HasParent":false,
       "IsLargeFABan":false,
       "FAUsage":null,
       "HasFAMinsOverage":false,
       "HasFAMsgsOverage":false,
       "HasFADldsOverage":false,
       "URL":"\/PartnerServices.aspx?service=eBill&link=MonthlyUsage",
       "MessageServiceName":null,
       "HasMessageService":false,
       "IsAtHome":false,
       "AllowedData":0,
       "UsedData":0,
       "IsData":false,
       "ThrottleThresholdPercentage":null,
       "IsSuspended":false,
       "SuspendedMsisdns":[  
    
       ],
       "IsPPCustomer":true,
       "IsEmployee":false,
       "IsPermissioned":false,
       "IsStandard":false,
       "IsRestricted":false,
       "IsLoggedSuspended":false,
       "IsSuspendRestoreOn":true,
       "ThrottleDataLimit":10,
       "DataUsageLink":"Data: 3.3 GB \/ Unlimited",
       "DataGauge":{  
          "Allotment":"-1",
          "Max":"10240",
          "Threshold":"0.0",
          "Used":"3372.804"
       },
       "IsNoOverage":false
    }
**Note1:** I am trying to figure out what the "IsAtHome" parameter is an indication of. If anybody has any info please let me know.

**Note2:** This is for educational purposes only and is not sanctioned by t-mobile or its affiliates.
