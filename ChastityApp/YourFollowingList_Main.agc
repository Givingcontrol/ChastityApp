
if (screenToView = constYourFollowingListScreen)
	if (screenNo <> constYourFollowingListScreen)
		iterationOffset = 0
		lastFilterCount = -1
		lastYourFollowingSearchLength as integer : lastYourFollowingSearchLength = 0
		OryUIUpdateTextfield(editYourFollowingSearch, "inputText:;")
	endif
	screenNo = constYourFollowingListScreen
	
	elementY# = screenBoundsTop#
	
	// SCROLL BAR
	OryUIInsertScrollBarListener(scrollBar)
	
	// SCROLL TO TOP
	// Would make sense to add to the bottom of this file but it causes the screen to flicker
	if (redrawScreen = 1) then OryUIUpdateScrollToTop(screen[screenNo].scrollToTop, "colorID:" + str(theme[themeSelected].color[3]))
	OryUIInsertScrollToTopListener(screen[screenNo].scrollToTop)
	
	// TOP BAR
	if (redrawScreen = 1)
		OryUIUpdateTopBar(screen[screenNo].topBar, "text:" + username$ + ";position:" + str(screenNo * 100) + ",0;colorID:" + str(colorMode[colorModeSelected].topBar))
	endif
	OryUIInsertTopBarListener(screen[screenNo].topBar)
	if (lower(OryUIGetTopBarNavigationReleasedName(screen[screenNo].topBar)) = "back" or (GetRawKeyPressed(27) and OryUITextfieldIDFocused = -1 and OryUIInputSpinnerIDFocused = -1))
		previousBreadcrumb = GetPreviousBreadcrumb()
		RemoveLastBreadcrumb()
		SetScreenToView(previousBreadcrumb)
	endif
	if (lower(OryUIGetTopBarActionReleasedName(screen[screenNo].topBar)) = "refresh")
		GetYourRelations(1)
		SetScreenToView(constYourFollowingListScreen)
	endif
	elementY# = elementY# + OryUIGetTopBarHeight(screen[screenNo].topBar)
	
	// TABS
	if (redrawScreen = 1)
		OryUIUpdateTabs(screen[screenNo].tabs, "position:" + str(screenNo * 100) + "," + str(elementY#) + ";minPosition:" + str(screenNo * 100) + "," + str(elementY#) + ";colorID:" + str(colorMode[colorModeSelected].tabs) + ";activeColor:255,255,255;inactiveColor:255,255,255")
		OryUISetTabsButtonSelected(screen[screenNo].tabs, 2)
	endif
	OryUIInsertTabsListener(screen[screenNo].tabs)
	if (OryUIGetTabsButtonReleasedID(screen[screenNo].tabs) = 1)
		SetScreenToView(constYourFollowersListScreen)
	endif
	if (OryUIGetTabsButtonReleasedID(screen[screenNo].tabs) = 3)
		SetScreenToView(constYourBlockedUsersListScreen)
	endif
	
	elementY# = elementY# + OryUIGetTabsHeight(screen[screenNo].tabs)

	// PULL DOWN TO REFRESH
	if (PullDownToRefresh(screenNo, elementY#, elementY# + 10, GetSpriteHeight(sprPullToRefreshCircle)))
		GetYourRelations(1)
		SetScreenToView(constYourFollowingListScreen)
	endif
	
	// FOLLOWING SEARCH BAR
	if (yourFriends.following.length >= 0 or OryUIFindNameInHTTPSQueue(httpsQueue, "GetYourRelations"))
		if (redrawScreen = 1)
			OryUIUpdateSprite(sprYourFollowingSearchBar, "position:" + str(screenNo * 100) + "," + str(elementY#) + ";colorID:" + str(colorMode[colorModeSelected].pageColor))
			OryUIUpdateTextfield(editYourFollowingSearch, "position:" + str((screenNo * 100) + 5) + "," + str(elementY#) + ";maxLength:15;backgroundColorID:" + str(colorMode[colorModeSelected].pageColor) + ";textColorID:" + str(colorMode[colorModeSelected].textColor) + ";strokeColorID:" + str(colorMode[colorModeSelected].textfieldStrokeColor) + ";showTrailingIcon:true;trailingIcon:clear")
		endif
		OryUIInsertTextFieldListener(editYourFollowingSearch)
		if (OryUIGetTextfieldTrailingIconReleased(editYourFollowingSearch))
			OryUISetTextfieldString(editYourFollowingSearch, "")
			SetEditBoxFocus(OryUITextfieldCollection[editYourFollowingSearch].editBox, 0)
		endif
		if (OryUIGetTextfieldHasFocus(editYourFollowingSearch))
			SetViewoffset(GetViewOffsetX(), 0)
			OryUIUpdateSprite(OryUITextfieldCollection[editYourFollowingSearch].sprActivationIndicator, "size:" + str(GetSpriteWidth(OryUITextfieldCollection[editYourFollowingSearch].sprContainer)) + "," + str(GetSpriteHeight(OryUITextfieldCollection[editYourFollowingSearch].sprActivationIndicator)) + ";colorID:" + str(theme[themeSelected].color[3]) + ";alpha:255")
		else
			OryUIUpdateSprite(OryUITextfieldCollection[editYourFollowingSearch].sprActivationIndicator, "size:" + str(GetSpriteWidth(OryUITextfieldCollection[editYourFollowingSearch].sprContainer)) + "," + str(GetSpriteHeight(OryUITextfieldCollection[editYourFollowingSearch].sprActivationIndicator)) + ";colorID:" + str(colorMode[colorModeSelected].textColor) + ";alpha:50")
		endif
		elementY# = elementY# + GetSpriteHeight(sprYourFollowingSearchBar)
	else
		OryUIUpdateSprite(sprYourFollowingSearchBar, "position:-1000,-1000")
		OryUIUpdateTextfield(editYourFollowingSearch, "position:-1000,-1000")
		elementY# = elementY# + 2
	endif
	
	startScrollBarY# = elementY# + 1

	// PAGE
	if (redrawScreen = 1)
		OryUIUpdateSprite(screen[screenNo].sprPage, "position:" + str(screenNo * 100) + "," + str(elementY#) + ";alpha:0")
	endif
	
	// SORT FOLLOWING
	if (redrawScreen = 1 or len(OryUIGetTextFieldString(editYourFollowingSearch)) <> lastYourFollowingSearchLength)
		lastYourFollowingSearchLength = len(OryUIGetTextFieldString(editYourFollowingSearch))
		SortYourFollowing(OryUIGetTextfieldString(editYourFollowingSearch))
	endif

	// NOT FOLLOWING ANYONE
	if (yourFriends.following.length = -1 and OryUIFindNameInHTTPSQueue(httpsQueue, "GetYourRelations") = 0)
		OryUIUpdateText(txtYourNotFollowingAnyoneLine1, "text:Not Following Anyone Yet;position:" + str((screenNo * 100) + 50) + "," + str(elementY# + 2) + ";colorID:" + str(colorMode[colorModeSelected].textColor))
		OryUIUpdateText(txtYourNotFollowingAnyoneLine2, "text:" + OryUIWrapText("When you follow people, they will be listed here" + chr(10) + chr(10) + "You can follow people via their profile screen", 2.6, 94) + ";position:" + str((screenNo * 100) + 50) + "," + str(elementY# + 6) + ";colorID:" + str(colorMode[colorModeSelected].textColor))
	else
		if (filterCount = 0 and OryUIFindNameInHTTPSQueue(httpsQueue, "GetYourRelations") = 0)
			OryUIUpdateText(txtYourNotFollowingAnyoneLine1, "text:No Users Found;position:" + str((screenNo * 100) + 50) + "," + str(elementY# + 2) + ";colorID:" + str(colorMode[colorModeSelected].textColor))
			OryUIUpdateText(txtYourNotFollowingAnyoneLine2, "text:Try refining your search;position:" + str((screenNo * 100) + 50) + "," + str(elementY# + 6) + ";colorID:" + str(colorMode[colorModeSelected].textColor))
		else
			OryUIUpdateText(txtYourNotFollowingAnyoneLine1, "position:-1000,-1000")
			OryUIUpdateText(txtYourNotFollowingAnyoneLine2, "position:-1000,-1000")
		endif
	endif
	
	// FOLLOWING LIST
	if (redrawScreen = 1)
		OryUIUpdateList(listYourFollowing, "position:" + str(screenNo * 100) + "," + str(elementY#) + ";colorID:" + str(colorMode[colorModeSelected].pageColor))
		startListY# = elementY#
	endif
	listItemHeight# = 8.0
	maxListItemCount = ceil(100.0 / listItemHeight#) + 4
	if (lastFilterCount <> filterCount)
		if (filterCount >= maxListItemCount)
			OryUISetListItemCount(listYourFollowing, maxListItemCount)
		else
			OryUISetListItemCount(listYourFollowing, filterCount)
		endif
		lastFilterCount = filterCount
	endif
	iterationOffset = floor((GetViewOffsetY() - startListY#) / listItemHeight#)
	if (iterationOffset + maxListItemCount > filterCount) then iterationOffset = filterCount - maxListItemCount
	if (iterationOffset < 0) then iterationOffset = 0
	OryUIUpdateList(listYourFollowing, "y:" + str(startListY# + (iterationOffset * listItemHeight#)))
	OryUIInsertListListener(listYourFollowing)
	for i = 0 to maxListItemCount - 1
		if (i <= OryUIGetListItemCount(listYourFollowing) - 1)
			if (yourFriends.following.length >= 0)
				sortedIteration = yourFriends.followingSorted[i + iterationOffset].iteration
				
				mainRoleLevel$ = ""
				if (yourFriends.following[sortedIteration].mainRole = 1)
					if (yourFriends.following[sortedIteration].keyholderLevel = 1) then mainRoleLevel$ = "Novice Keyholder"
					if (yourFriends.following[sortedIteration].keyholderLevel = 2) then mainRoleLevel$ = "Keyholder"
					if (yourFriends.following[sortedIteration].keyholderLevel = 3) then mainRoleLevel$ = "Established Keyholder"
					if (yourFriends.following[sortedIteration].keyholderLevel = 4) then mainRoleLevel$ = "Distinguished Keyholder"
					if (yourFriends.following[sortedIteration].keyholderLevel = 5) then mainRoleLevel$ = "Renowned Keyholder"
					mainRoleColour = roleColours.keyholder[yourFriends.following[sortedIteration].keyholderLevel]
				endif
				if (yourFriends.following[sortedIteration].mainRole = 2)
					if (yourFriends.following[sortedIteration].lockeeLevel = 1) then mainRoleLevel$ = "Novice Lockee"
					if (yourFriends.following[sortedIteration].lockeeLevel = 2) then mainRoleLevel$ = "Intermediate Lockee"
					if (yourFriends.following[sortedIteration].lockeeLevel = 3) then mainRoleLevel$ = "Experienced Lockee"
					if (yourFriends.following[sortedIteration].lockeeLevel = 4) then mainRoleLevel$ = "Devoted Lockee"
					if (yourFriends.following[sortedIteration].lockeeLevel = 5) then mainRoleLevel$ = "Fanatical Lockee"
					mainRoleColour = roleColours.lockee[yourFriends.following[sortedIteration].lockeeLevel]
				endif
				if (mainRoleLevel$ <> "")
					OryUIUpdateListItem(listYourFollowing, i, "noOfLeftLines:2;colorID:" + str(colorMode[colorModeSelected].pageColor) + ";leftLine1Text:" + yourFriends.following[sortedIteration].username$ + ";leftLine1TextSize:2.8;leftLine1TextColorID:" + str(colorMode[colorModeSelected].textColor) + ";leftLine2Text:" + mainRoleLevel$ + ";leftLine2TextSize:2.4;leftLine2TextColorID:" + str(mainRoleColour))
				else
					OryUIUpdateListItem(listYourFollowing, i, "noOfLeftLines:1;colorID:" + str(colorMode[colorModeSelected].pageColor) + ";leftLine1Text:" + yourFriends.following[sortedIteration].username$ + ";leftLine1TextSize:2.8;leftLine1TextColorID:" + str(colorMode[colorModeSelected].textColor))
				endif
				
				if (GetSpriteY(OryUIListCollection[listYourFollowing].sprItemContainer[i]) >= GetViewOffsetY() and GetSpriteY(OryUIListCollection[listYourFollowing].sprItemContainer[i]) <= GetViewOffsetY() + GetScreenBoundsBottom())
					OryUIUpdateListItemRightButton(listYourFollowing, i, "text:Unfollow;textSize:2.5;size:22,3.2;colorID:" + str(theme[themeSelected].color[3]))
					if (OryUIGetListItemRightButtonReleased(listYourFollowing) = i)
						UnfollowUser(yourFriends.following[sortedIteration].id, 1)
					elseif (OryUIGetSpriteReleased() = OryUIListCollection[listYourFollowing].sprItemContainer[i])
						GetProfileData(yourFriends.following[sortedIteration].id, 1)
						lastScreenViewed = constYourFollowingListScreen
						screen[screenNo].lastViewY# = GetViewOffsetY()
						SetScreenToView(constViewProfileScreen)
					endif
				endif
			endif
		endif
	next
	elementY# = startListY# + (filterCount * listItemHeight#)
	
	// ADVERTS
	if (OryUIAnyTextfieldFocused() = 0 and OryUIAnyInputSpinnerTextfieldFocused() = 0)
		if (adsRemoved = 0)
			oryUIBottomBannerAdOnScreen = 1
			SetAdvertVisible(1)
		else
			oryUIBottomBannerAdOnScreen = 0
			SetAdvertVisible(0)
		endif
	else
		oryUIBottomBannerAdOnScreen = 0
		SetAdvertVisible(0)
	endif
	
	// SCROLL LIMITS
	OryUIUpdateSprite(screen[screenNo].sprPage, "height:" + str(elementY# - GetSpriteY(screen[screenNo].sprPage)))
	maxScrollY# = ((GetSpriteY(screen[screenNo].sprPage) + GetSpriteHeight(screen[screenNo].sprPage)) - 100) + 50
	if (maxScrollY# < 0) then maxScrollY# = 0
	OryUISetScreenScrollLimits(screenNo * 100, screenNo * 100, 0, maxScrollY#)
	
	// SCROLL BAR
	if (redrawScreen = 1)
		if (oryUIBottomBannerAdOnScreen = 1) then trackHeightReduction# = 21
		if (oryUIBottomBannerAdOnScreen = 0) then trackHeightReduction# = 14
		trackBarHeight# = 100 - startScrollBarY# - trackHeightReduction#
		OryUIUpdateScrollBar(scrollBar, "contentSize:100," + str(maxScrollY# + 100 - trackHeightReduction#) + ";trackPosition:93," + str(startScrollBarY#) + ";trackSize:4.5," + str(trackBarHeight#) + ";invisibleGripSize:8.5,7;gripSize:4.5,5;gripColorID:" + str(theme[themeSelected].color[3]) + ";showGripIcon:true;gripIconSize:4,5;gripIconColor:255,255,255;trackColor:0,0,0,0")
	endif
	if (contentHeightChanged = 1)
		OryUISetScrollBarContentSize(scrollBar, 100, maxScrollY# + 100 - trackHeightReduction#)
		contentHeightChanged = 0
	endif
endif
