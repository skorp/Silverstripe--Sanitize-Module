<?php
class SanitizeDataObject extends Extension {
	function onBeforeWrite() {
		$changedFields = $this->owner->getChangedFields(true,2);
		foreach($changedFields as $ckey => $value) {
			$this->owner->$ckey = Sanitize::Purify($this->owner->$ckey);
		}
	}
}