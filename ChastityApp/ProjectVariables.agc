// File: Constants.agc
// Created: 20-11-09

#constant constAppName$ "ChastityApp"
#constant constCompanyName$ "ChastityApp Company."

#constant constAppServerDomain$ "https://chastityapp.com"
#constant constAppMarketingDomain$ "https://chastityapp.com"
#constant constAppAPIDocumentsURL$ "https://api.chastityapp.com/docs"
#constant constAppForums$ "https://chastityapp.com/forums"

#constant constFollowDiscord$ "https://discordapp.com/invite/xxxxx"
#constant constFollowEmail$ "support@chastityapp.com"
#constant constFollowFacebook$ "https://www.facebook.com/xxxxx"
#constant constFollowGitHub$ "https://github.com/xxxxx"
#constant constFollowTwitter$ "https://www.twitter.com/xxxxx"

#constant constBuildNumber 276
#constant constVersionNumber$ "2.6.8"

#constant constAdMobAndroid$ "ca-app-pub-xxxxx/xxxxx"
#constant constAdMobiOS$ "ca-app-pub-xxxxx/xxxxx"
#constant constInAppPurchaseSetKeyAndroid$ "xxxxx"
#constant constPushNotificationSenderID$ "xxxxx"

#constant constDiscordOAUTHClientID$ "xxxxx"

global URLs as typeURLs[1]
URLs[0].Domain = constAppServerDomain$
URLs[0].URLPath = "app/v" + ReplaceString(constVersionNumber$, " ", ".", -1)
URLs[0].AcceptFollowRequest = "acceptfollowrequest.php"
URLs[0].AddNewAPIProject = "addnewapiproject.php"
URLs[0].AddNewUserID = "addnewuserid.php"
URLs[0].BlockUser = "blockuser.php"
URLs[0].CheckNewShareID = "checknewshareid.php"
URLs[0].CheckNewUserID = "checknewuserid.php"
URLs[0].CheckNewUsername = "checknewusername.php"
URLs[0].CheckRestoreID = "checkrestoreuserid.php"
URLs[0].CreateNewSharedLock = "addnewshareid.php"
URLs[0].DeclineFollowRequest = "declinefollowrequest.php"
URLs[0].DeleteAPIProject = "agkdeleteapiproject.php"
URLs[0].DeleteLock = "agkdeletelock.php"
URLs[0].DeleteSharedLock = "agkdeletesharedlock.php"
URLs[0].DisconnectDiscord = "disconnectdiscord.php"
URLs[0].DisconnectTwitter = "disconnecttwitter.php"
URLs[0].FollowUser = "agkfollowuser.php"
URLs[0].GetAccountData = "agkgetaccountdata.php"
URLs[0].GetAPIProjects = "agkgetapiprojects.php"
URLs[0].GetKeyholdersData = "agkgetkeyholdersdata.php"
URLs[0].GetLockLog = "agkgetlocklog.php"
URLs[0].GetLockTemplates = "agkgetgeneratedlocks.php"
URLs[0].GetLockUpdates = "agkgetlockupdates.php"
URLs[0].GetMyLocksDeleted = "agkgetmylocksdeleted.php"
URLs[0].GetOthersRelations = "agkgetothersrelations.php"
URLs[0].GetProfileData = "agkgetprofiledata.php"
URLs[0].GetServerVariables = "agkgetservervariables.php"
URLs[0].GetSharedLockInformation = "agkgetsharedlockinformation.php"
URLs[0].GetSharedLocksData = "agkgetsharedlocks.php"
URLs[0].GetSharedLocksDeleted = "agkgetsharedlocksdeleted.php"
URLs[0].GetSharedLockUsersData = "agkgetsharedlockusers.php"
URLs[0].GetUserLog = "agkgetuserlog.php"
URLs[0].GetYourRelations = "agkgetyourrelations.php"
URLs[0].RemoveUserFromLock = "agkremoveuserfromlock.php"
URLs[0].ResetAPIClientSecret = "agkresetapiclientsecret.php"
URLs[0].RestoreAccount = "agkrestoreaccount.php"
URLs[0].RestoreDeletedSharedLock = "agkrestoredeletedsharedlock.php"
URLs[0].UnblockUser = "agkunblockuser.php"
URLs[0].UnfollowUser = "agkunfollowuser.php"
URLs[0].UnlockUsersLock = "agkunlockuserslock.php"
URLs[0].UpdateAccount = "agkupdateaccount.php"
URLs[0].UpdateAPIProject = "agkupdateapiproject.php"
URLs[0].UpdateKeyholdersEmoji = "agkupdatekeyholdersemoji.php"
URLs[0].UpdateLocksDatabase = "agkupdatelock.php"
URLs[0].UpdateSharedLock = "agkupdatesharedlock.php"
URLs[0].UpdateUsername = "agkupdateusername.php"
URLs[0].UpdateUsersLock = "agkupdateuserslock.php"
URLs[0].UpdateUsersRatingFromKeyholder = "agkupdateusersrating.php"
