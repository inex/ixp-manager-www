<?php $active = 'support'; include 'header.php' ?>


      <div class="row marketing">
        <div class="col-lg-12">

          <h2>Getting Help</h2>

          <h3>Documentation</h3>

          <p>
          All documentation for IXP Manager is linked in the support menu above. There is also a page
          linked there for presentations and talks which should be quiet useful.
          </p>

          <h3>Mailing Lists</h3>

          <ul>
              <li> <b>IXP Manager Users:</b> As an open source project, the primary channel for
                  requesting help is via our mailing list. The developers and operations staff
                  from INEX (and other IXs) are on this list but we also try and foster an
                  environment where other more experienced users can help new comers.
                  <br><br>
                  Please <a href="https://www.inex.ie/mailman/listinfo/ixpmanager">subscribe here</a>
                  (and see the <a href="https://www.inex.ie/pipermail/ixpmanager/">archives here</a>).
                  <br><br>
                  This list has moderate traffic - from low levels to ~100 emails / month.
                  <br><br>
                  <b>Please read the section <i><a href="#asking-for-help">The Best Way to Ask for Help</a></i>
                      below to maximise your chances of getting a quick and useful reply.</b>
                  <br><br>
              </li>

              <li> <b>IXP Manager Announce:</b> announcements of new releases, security issues
                    or important project news. We strongly advise all users of IXP Manager to
                    subscribe to this list.
                    <br><br>
                    This list has extremely low volume (~0-5 emails / month) and posting is
                    restricted to project members only.
                    <br><br>
                    Please <a href="https://www.inex.ie/mailman/listinfo/ixpmanager-announce">subscribe here</a>.
                    (and see the <a href="https://www.inex.ie/pipermail/ixpmanager-announce/">archives here</a>).
              </li>
          </ul>

          <h3>Bugs and Feature Requests</h3>

          <p>
            All bugs should be filed on the <a href="https://github.com/inex/IXP-Manager/issues">GitHub
            Issues page</a>. It is <strong>vitally important</strong> that you file a detailed bug report
            with steps on how to reproduce the issue. One line / vague bug reports are likely to be closed
            without investigation.
          </p>

          <p>
            The ideal feature request comes with code via a pull request. This (or
            <a href="/commercial">commercial support</a>)
            is the most probable way to get a feature into IXP Manager! Feel free to file feature requests as an
            <a href="https://github.com/inex/IXP-Manager/issues">issue</a> and tag it as such.
          </p>

          <p>
            We will give all feature requests a fair hearing and due consideration. But, those that we
            are unlikely to implement pro bono or those that do not align with the core purpose of IXP
            Manager may be closed or moved to a <em>feature request file</em> so as not to clog up
            the issue tracker.
          </p>

          <h3>"Support, Out in the Open"</h3>

          <p>

            INEX promotes a "Support, out in the open" model.  When support issues crop up, we invite people
            to send them to the IXP Manager Users mailing list (see above) where a member of the community can answer
            them.  When this model is used, search engines pick up relevant query terms, everybody learns
            about the application and the developers can see what's important to the community.  This allows
            all members of the community to benefit.

          </p>

          <p>

            Alternatively if the problem is a repeatable bug, this can be reported on the <a
            href="https://github.com/inex/IXP-Manager/issues">IXP Manager issue tracker</a> on Github where
            it can be triaged by our dev team.

          </p>

          <p>

            INEX doesn't offer free private technical support.  This means that if you email one of the
            development team directly, we will politely suggest that you send your question to the mailing
            list or direct you to <a href="https://www.ixpmanager.org/commercial">commercial support options</a>.

          </p>


          <a name="asking-for-help"></a>
          <h3>The Best Way to Ask for Help</h3>


          <p>
              If you do need help with something and you have decided to open a bug or email the mailing list,
              please remember that the developers and contributors are busy people and their help is on a voluntary
              basis.
          </p>
          <p>
              With that in mind, the best way to get a thoughtful, complete and helpful response is to offer as
              much information as possible in your original query. So, where appropriate, consider the following:
          </p>

          <ul>
              <li> make sure the problem was not already reported as a bug or asked on the mailing list to avoid duplicates
                  (to search the mailing list add this to your Google search: <tt>site:www.inex.ie</tt>);
              </li>
              <li> ensure you have read the documentation in detail: <a href="https://docs.ixpmanager.org/">https://docs.ixpmanager.org/</a>;
                <ul>
                    <li> If, when your problem is solved, you feel that the documentation could be improved, please
                        <a href="https://docs.ixpmanager.org/dev/docs/">contribute back</a> with suggested improvements; </li>
                </ul>
            </li>
              <li> explain the issue with sufficient detail that we will be certain of what you are trying to do. Include
                  your understanding of what the expected result should be versus what you are getting; </li>
              <li> always provide detailed steps to reproduce an issue; </li>
              <li> always test if the latest release is affected. Bug reports on older releases cannot be accepted and will be closed; </li>
              <li> provide relevant snippnets of your <tt>.env</tt> (or all of it after removing keys, passwords, etc.) </li>
              <li> copy all relevant logs to an online pastebin such as <a href="https://pastebin.ibn.ie/">our own one</a> and place the URL
                  you receive from the pastebin into your email. Logs will usually be found under <tt>$IXPROOT/storage/logs/...</tt>.
                  Our mailing list has size and attachement restrictions, as such:
                    <ul>
                        <li> never attach screenshots of logs;
                        <li> never attach log files to your mailing list email;
                    </ul>
              </li>
              <li> mention the OS you are running IXP Manager on (including Linux variant if relevant) </li>
              <li> mention the version of IXP Manager you are running (<tt>$IXPROOT/version.php</tt> for >= v4.9.0 / <tt>$IXPROOT/library/IXP/Version.php</tt> for older versions); </li>
              <li> mention the version of PHP you have (<tt>php -v</tt>) </li>
              <li> provide anything else you think might help someone solve your problem. </li>

          </ul>


        </div>

<?php include 'footer.php'; ?>
